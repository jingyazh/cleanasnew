<?php

namespace App\Http\Controllers;

use App\Client;
use App\Ticket;
use App\Crequest;
use App\Statistic;
use Redirect;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Datatables;

use Validator;
use Mail;

class TicketController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("tickets.index", ['type'=>'inbox']);
    }


    //... for DataTable Data
    public function list_data(Request $request){
               
        $user = Auth::user();

        $list = ($user->roleno == User::ROLE_MASTER) ? 
            Ticket::all()  : $user->mytickets();

            
        // Ticket::whereHasMorph('ticketable', 'App\Client',
        //     function (Builder $query) {
        //         $query->where('resellerid', '=', $user->id);
        //     }
        // )->get();


        return Datatables::of($list)        
            ->addColumn('reseller', function ($item) { 
                return $item->client->reseller->name;                 
            })    
            ->addColumn('keep_phoneno', function ($item) { 
                return ($item->keep_phoneno == null || trim($item->keep_phoneno)=="") ? 
                    $item->client->phone : $item->keep_phoneno ;                 
            })    
            ->addColumn('status', function ($item) { 
                return __($item->statusstr);                 
            })  
            ->addColumn('client', function ($item) { 
                return $item->client->fname." ".$item->client->lname;                 
            })
            ->addColumn('service', function ($item) { 
                return __($item->servicestr);                 
            })
            ->addColumn('speed', function ($item) { 
                return $item->speedstr;                 
            })
            ->addColumn('planphone', function ($item) { 
                return __($item->planphonestr);                 
            })

            ->addColumn('action', function ($item) {       
                $url1 = route('tickets.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> <i class='fa fa-plus'> </i> <i class='fa fa-tv'> </i> </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action'])
            ->make(true);        
    }  


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createex(Request $request, $cid)
    {
        //
        $curuser = Auth::user();
        
        $clients = ($curuser->roleno == User::ROLE_MASTER)  ? 
            Client::all() : $curuser->myclients();

        if ($cid !== 0 && $curuser->roleno != User::ROLE_MASTER) {

            //...  Plz enable reseller can place 2 times

            // $cnt = Ticket::where('resellerid', $curuser->id)->where('clientno', $cid)->count();

            // if ($cnt > 0) {
            //     return redirect()->back()->with('error', __("Cannot create duplicate order for one customer !"));
            // }

        }


        if ($cid == 0 && isset($clients[0]) ) {
            $cid = $clients[0]->clientno;
        }

        return view("tickets.create", ['clients' => $clients, 'cid'=>$cid,
            'user' => $curuser]);
    }    
    
    public function create(Request $request) {
        return $this->createex($request, 0);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $curuser = Auth::user();
        $input = $request->all();        
        $validator = Validator::make($request->all(),[
            'macaddr' => 'required|unique:tickets', 
            'clientno' => 'required',    //... |min:17|max:17
            // 'serviceno' => 'required', 
            // 'requestno' => 'required',   
        ])->validate();

        if ($curuser->roleno != User::ROLE_MASTER) {
            //...  Plz enable reseller can place 2 times
            // $cid = intval($input['clientno']);
            
            // $cnt = Ticket::where('resellerid', $curuser->id)->where('clientno', $cid)->count();

            // if ($cnt > 0) {
            //     return Redirect::back()->withErrors(['clientno'=>[__("Cannot create duplicate order for one customer !")]])
            //     ->withInput($input);
            // }
        }

        // $validator->validate();  

        $input['availtimes'] = $request->input('availtimes');

        $ticket = new Ticket;           

        $ticket->fill($input)->resellerid = $curuser->id;  

        $ticket->save();

        //... make statistic
        $modifyStr = __(Statistic::ACTION_NAMES[Statistic::ACTION_CREATE_ORDER]);
        
        Statistic::create(['reseller_id'=>$curuser->id,
            'client_id'=>$ticket->client->id, 'client_name'=>$ticket->client->name,
            'ticketno'=>$ticket->id,
            'acttype'=>Statistic::ACTION_CREATE_ORDER,
            'actcontent'=> $modifyStr.
                "",
        ]);

        $client = $ticket->client;

        $str = __("Hi, Sir!")." \n\n";
        $str .= __("Status")." : ". $modifyStr . "\n\n";
        $str .= __("Reseller Name")." : ". $client->reseller->name. "\n\n\n";

        $str .= __("Name")." : ". $client->name. "\n";
        $str .= __("Commercial Name")." : ". $client->comname. "\n";
        $str .= __("Phone")." : ". $client->phone. "\n";
        $str .= __("Email")." : ". $client->email . "\n";        
        $str .= __("Address")." : ". $client->addr1.' '.$client->addr2.' '.$client->city.' '.$client->province  . "\n";   
        $str .= __("Code Postal")." : ". $client->zipcode . "\n\n";        
        
        $keys = [
            // 'resellerid' => __('Reseller')

            'serviceno' => [__ ('Service'), Ticket::SERVICES], 
            'transother' => __('Name Foulder'), 
            'speedno' => [__('Plan Internet Speed'), Ticket::SPEEDS],
            'planphoneno' => [__('Plan Phone'), Ticket::PLANPHONES], 
            'iskeepno' => [__('Keep Number'), Ticket::ISKEEPNOS], 
            'keep_phoneno' => __('Phone Number'), 
            'keep_address' => __('Holder name'), 
            'installdate' => __('Install Date'),             
            'transferno' => [__('Transfer Choice'), Ticket::TRANSFERS],             
            'requestno' => [__('Request Service'), Ticket::REQUESTS],              
            'modemno' => [__('Choice Modem'), Ticket::MODEMS], 
            'sn' => __('Serial No'),
            'macaddr' => __('Mac Address'), 
            'installon' => __('Installed on'),
            'clientvl' => __('Customer VL'), 
            'status' => [__('Status'), Ticket::STATUSES],
            'usernamesip' => __('Username Sip'), 
            'passwd' => __('Password'), 
            'comment' => __('Comment'),

            'oldaddr' => __('Old address'),
            'newaddr' => __('New address')
            
            // 'keep_fname' => __('First Name'), 
            // 'keep_lname', 
          
            // 'keep_oldprovider',            
            // 'availtimes' => __('Availability'), 
        ];
        foreach ($keys as $k => $karr) {
            if (is_array($karr)) {
                if (isset($karr[1][$ticket->{$k}]) ) {
                    $str .= $karr[0]." : ". __($karr[1][$ticket->{$k}]) . "\n";
                }
            } else {
                $str .= $karr." : ". $ticket->{$k} . "\n";
            }
        }
        if(isset($ticket->availtimes) && is_array($ticket->availtimes) &&  count($ticket->availtimes) > 0 ) {
            $availtimes_strarr = [];
            foreach($ticket->availtimes as $v)  $availtimes_strarr[] = Ticket::AVAILTIMES[$v];

            $str .= __('Availability')." : ". implode(',', $availtimes_strarr) . "\n";
        }
    

        $str .= "\n\n".__("Best Regards.");

        // Mail::raw($str, function($message) {
        //     $message->subject(__("Add Order"));
        //     $message->to('silverbead0815@126.com');
        // });

        $APP_EMAIL_SENDING = env("APP_EMAIL_SENDING", false);

        if ($APP_EMAIL_SENDING) {
            Mail::raw($str, function($message) {
                $message->subject(__("Add Order"));
                $message->to('revendeur@clubinternet.ca');
            });      
        }      

        //... create new request automatically  (now stop)
        // $crequest = new Crequest;
        // $crequest->fill([
        //     'resellerid' => $curuser->id,
        //     'status' => 0,
        //     'ztext' => 'Create Order',
        //     'clientno' => $ticket->clientno
        // ]);
        // $crequest->save();

        
        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
        $curuser = Auth::user();

        //... create new request automatically


        return view('tickets.show', ['ticket'=>$ticket, 'user' => Auth::user()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
        $user = Auth::user();
        
        $clients = ($user->roleno == User::ROLE_MASTER)  ? 
            Client::all() : $user->myclients();

        if ($ticket->availtimes == null) $ticket->availtimes = array();

        return view('tickets.edit', ['ticket'=>$ticket, 'clients' => $clients, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
        $curuser = Auth::user();
        $input = $request->all();  

        $validator = Validator::make($request->all(),[
            'clientno' => 'required', 
            'macaddr' => ($ticket->macaddr != $request->macaddr) ? 'required|unique:tickets':'required'  
            //... |min:17|max:17
        ])->validate();
        

        $input['availtimes'] = $request->input('availtimes');

        $client = $ticket->client;
        
        $modifyStr = __(Statistic::ACTION_NAMES[Statistic::ACTION_MODIFY_ORDER]);
        //... make changing History
        // foreach ($input as $k => $v) {
        //     if ($v !== $ticket->attributes[$k]) {        }
        // }
        $str = __("Hi, Sir!")." \n\n";
        $str .= __("Status")." : ". $modifyStr . "\n";
        $str .= __("Reseller Name")." : ". $client->reseller->name. "\n\n\n";
        $str .= __("Name")." : ". $client->name. "\n";
        $str .= __("Commercial Name")." : ". $client->comname. "\n";
        $str .= __("Phone")." : ". $client->phone. "\n";
        $str .= __("Email")." : ". $client->email . "\n";        
        $str .= __("Address")." : ". $client->addr1.' '.$client->addr2.' '.$client->city.' '.$client->province  . "\n";   
        $str .= __("Code Postal")." : ". $client->zipcode . "\n\n";  

        $keys = [
            'serviceno' => [__ ('Service'), Ticket::SERVICES], 
            'transother' => __('Name Foulder'), 
            'speedno' => [__('Plan Internet Speed'), Ticket::SPEEDS],
            'planphoneno' => [__('Plan Phone'), Ticket::PLANPHONES], 
            'iskeepno' => [__('Keep Number'), Ticket::ISKEEPNOS], 
            'keep_phoneno' => __('Phone Number'), 
            'keep_address' => __('Holder name'), 
            'installdate' => __('Install Date'),             
            'transferno' => [__('Transfer Choice'), Ticket::TRANSFERS],             
            'requestno' => [__('Request Service'), Ticket::REQUESTS],              
            'modemno' => [__('Choice Modem'), Ticket::MODEMS], 
            'sn' => __('Serial No'),
            'macaddr' => __('Mac Address'), 
            'installon' => __('Installed on'),
            'clientvl' => __('Customer VL'), 
            'status' => [__('Status'), Ticket::STATUSES],
            'usernamesip' => __('Username Sip'), 
            'passwd' => __('Password'), 
            'comment' => __('Comment'),
            'availtimes' => __('Availability'),

            'oldaddr' => __('Old address'),
            'newaddr' => __('New address')
        ];
        
        foreach ($input as $k => $v) {
            $attributes = $ticket->getAttributes();

            // if (isset($attributes[$k])) {
            if (isset($v)) {
                $oldv = isset($attributes[$k]) ? $attributes[$k] : '';
                if ($k == 'availtimes') {
                    $availtimes_v = [];
                    foreach($v as $i)  $availtimes_v[] = Ticket::AVAILTIMES[$i];
                    $v = implode(',', $availtimes_v);

                    $oldv = $ticket->availtimes;
    
                    $availtimes_oldv = [];
                    foreach($oldv as $i)  $availtimes_oldv[] = Ticket::AVAILTIMES[$i];
                    $oldv = implode(',', $availtimes_oldv);
                }
    
                if ($v != $oldv && isset($keys[$k])) {    
                    $karr = $keys[$k];
                    if (is_array($karr)) {
                        if (isset($karr[1][$v]) ) {
                            $str .= $karr[0]." : ". __($karr[1][$oldv]) . "  ===>  ". __($karr[1][$v]) . "\n";
                        }
                    } else {
                        $str .= $karr." :  {$oldv}  ===>  {$v}  \n";
                    }
                }
            }

        }

        $str .= "\n\n".__("Best Regards.");

        $ticket->fill($input);  

        $ticket->save();
        
        Statistic::create(['reseller_id'=>$curuser->id,
            'client_id'=>$ticket->client->id, 'client_name'=>$ticket->client->name,
            'ticketno'=>$ticket->id,
            'acttype'=>Statistic::ACTION_MODIFY_ORDER,
            'actcontent'=> $modifyStr.
            "",
        ]);

        $APP_EMAIL_SENDING = env("APP_EMAIL_SENDING", false);

        if ($APP_EMAIL_SENDING) {
            Mail::raw($str, function($message) {
                $message->subject(__("Modify Order"));
                $message->to('revendeur@clubinternet.ca');
            });
            Mail::raw($str, function($message) use ($client) {
                $message->subject(__("Modify Order"));
                $message->to($client->reseller->email);
            });            
        } 
        else {
            echo "<pre>{$client->reseller->email} - {$str}</pre>"; exit;
        }

        // echo $str; exit;

        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
        $curuser = Auth::user(); 

        $ticket->delete();
        return response()->json([
            'success' => __('Ticket was deleted successfully!')
        ]);

    }
}
