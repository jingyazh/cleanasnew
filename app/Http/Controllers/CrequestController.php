<?php

namespace App\Http\Controllers;

use App\Crequest;
use App\Client;
use App\Ticket;
use App\Statistic;


use Illuminate\Http\Request;

use App\User;
use Auth;
use Datatables;

use Validator;
use Redirect;
use Mail;


class CrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function open(){
        $curuser = Auth::user();
        
        $clients = ($curuser->roleno == User::ROLE_MASTER)  ? 
            Client::all() : $curuser->myclients();

        return view("crequests.open", ['clients' => $clients, 'user' => $curuser]);
    }
    //... for DataTable Data
    public function openlist_data(Request $request){
               
        $user = Auth::user();

        //...todo check if client of this users or not.
        $list = ($user->roleno == User::ROLE_MASTER) ? 
            Ticket::all() : 
            $user->mytickets() ;

        return Datatables::of($list)        
            ->addColumn('clientname', function ($item) { 
                return $item->client->name;                 
            })
            ->addColumn('statusstr', function ($item) { 
                return __($item->statusstr);   
            })
            ->addColumn('servicestr', function ($item) { 
                return __($item->servicestr);
            })
            ->addColumn('speedstr', function ($item) { 
                return __($item->speedstr); 
            })
            ->addColumn('planphonestr', function ($item) { 
                return __($item->planphonestr);
            })

            ->addColumn('action', function ($item) {       
   
                // $url2 = route('crequests.createex', $item->id);
                $url2 = route('crequests.createex', $item->client->id);

                $openyurl = " <a href='{$url2}'> ".__('Open Request')." </a> ";

                return $openyurl;
            })
            ->rawColumns(['action'])
            ->make(true);        
    }  
    
    

    public function index()
    {
        //
        return view('crequests.index', []);
    }
    //... for DataTable Data
    public function crequests_data(Request $request){

        $user = Auth::user();

        $list = ($user->roleno == User::ROLE_MASTER) ? 
            $list = Crequest::all()  : $user->mycrequests();


        return Datatables::of($list)

            ->addColumn('resellername', function ($item) {  
                return $item->client->reseller->name;
            })
            ->addColumn('clientname', function ($item) {  
                return $item->client->name;
            })   
            ->addColumn('clientphone', function ($item) {  
                return $item->client->phone;
            })   
            ->addColumn('status', function ($item) { 
                return __($item->statusstr);
            })            
            ->addColumn('action', function ($item) {
                $url1 = route('crequests.edit', $item->id);
                $editurl = " <a href='{$url1}'> ".__('Edit')." </a> ";
                
                return $editurl;
            })
            ->rawColumns(['action'])
            ->make(true);        
    }    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return $this->createex('');
    }
    public function createex($cid)
    {
        //
        // $ticket = Ticket::find($tid);
        // return view("crequests.createex", ['ticket' => $ticket]);

        $user = Auth::user();
        $clients = ($user->roleno == User::ROLE_MASTER) ? 
            Client::all()  : $user->myclients();

        return view("crequests.create", ['clients' => $clients, 'cid' => $cid ]);     
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

        //... validation
        $validator = Validator::make($request->all(),[
            'clientno' => 'required',   
            //... 'ticketno' => 'required',   
            // 'ztext' => 'required',
        ])->validate();        
        //...Check 
        $crequest = new Crequest;           

        $crequest->fill($input)->resellerid = $curuser->id;       
        
        $crequest->save();

        //... make statistic
        $modifyStr = __(Statistic::ACTION_NAMES[Statistic::ACTION_CREATE_REQ]);
        Statistic::create(['reseller_id'=>$curuser->id,
            'client_id'=>$crequest->client->id, 'client_name'=>$crequest->client->name,
            'creqno'=>$crequest->id,
            'acttype'=>Statistic::ACTION_CREATE_REQ,
            'actcontent'=> $modifyStr.
                "",
        ]);        

        $client = $crequest->client;

        $str = __("Hi, Sir!")." \n\n";
        // $str .= __("Name")." : ". $client->name. "\n";
        // $str .= __("Reseller Name")." : ". $client->reseller->name. "\n";
        // $str .= __("Status")." : ". $modifyStr . "\n";
        $str .= __("Status")." : ". $modifyStr . "\n\n";
        $str .= __("Message")." : ". $crequest->ztext . "\n\n";
        $str .= __("Reseller Name")." : ". $client->reseller->name. "\n\n\n";

        $str .= __("Name")." : ". $client->name. "\n";
        $str .= __("Commercial Name")." : ". $client->comname. "\n";
        $str .= __("Phone")." : ". $client->phone. "\n";
        $str .= __("Email")." : ". $client->email . "\n";        
        $str .= __("Address")." : ". $client->addr1.' '.$client->addr2.' '.$client->city.' '.$client->province  . "\n";   
        $str .= __("Code Postal")." : ". $client->zipcode . "\n\n";         
        $str .= "\n\n".__("Best Regards.");

        // Mail::raw($str, function($message) {
        //     $message->subject(__("Add Request"));
        //     $message->to('silverbead0815@126.com');
        // });

        $APP_EMAIL_SENDING = env("APP_EMAIL_SENDING", false);

        if ($APP_EMAIL_SENDING) {
            //...temporary
            Mail::raw($str, function($message) {
                $message->subject(__("Add Request"));
                $message->to('revendeur@clubinternet.ca');
            });
        }
        
 

        return redirect()->route('crequests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crequest  $crequest
     * @return \Illuminate\Http\Response
     */
    public function show(Crequest $crequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crequest  $crequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Crequest $crequest)
    {
        //
        //... $ticket = $crequest->ticket;
        $user = Auth::user();

        return view('crequests.edit', ['crequest'=>$crequest, 'user' => $user 
            /*, 'ticket'=>$ticket*/ ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crequest  $crequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crequest $crequest)
    {
        //
        $curuser = Auth::user();
        $input = $request->all();

        //... validation
        // $validator = Validator::make($request->all(),[
        //     'ztext' => 'required',
        // ])->validate();      
        
        $prevZtext = $crequest->ztext;
        $prevMasteranswer = $crequest->masteranswer;
        
        $crequest->fill($input);
        
        $crequest->save();

        if ($prevZtext !=  $input['ztext'] || $prevMasteranswer != $input['masteranswer']) {

            $modifyStr = __(Statistic::ACTION_NAMES[Statistic::ACTION_MODIFY_REQ]);

            Statistic::create(['reseller_id'=>$curuser->id,
                'client_id'=>$crequest->client->id, 'client_name'=>$crequest->client->name,
                'creqno'=>$crequest->id,
                'acttype'=>Statistic::ACTION_MODIFY_REQ,
                'actcontent'=> $modifyStr."",
            ]);
    
            $client = $crequest->client;
            
            $str = __("Hi, Sir!")." \n\n";
            $str .= __("Name")." : ". $client->name. "\n";
            $str .= __("Reseller Name")." : ". $client->reseller->name. "\n";
            $str .= __("Status")." : ". $modifyStr . "\n";
            $str .= "\n\n".__("Best Regards.");
    
            // Mail::raw($str, function($message) {
            //     $message->subject(__("Modify Request"));
            //     $message->to('silverbead0815@126.com');
            // });
            $APP_EMAIL_SENDING = env("APP_EMAIL_SENDING", false);
            
            if ($APP_EMAIL_SENDING) {
                Mail::raw($str, function($message) {
                    $message->subject(__("Modify Request"));
                    $message->to('revendeur@clubinternet.ca');
                });
                //... mak if the reseller makes a change to his order he also receives an e-maile 
                Mail::raw($str, function($message) use ($client)  {
                    $message->subject(__("Modify Request"));
                    $message->to($client->reseller->email);
                });                
            }

        }

        


        return redirect()->route('crequests.index');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crequest  $crequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crequest $crequest)
    {
        //
        Crequest::destroy($crequest->id);
        return response()->json([
            'success' => __('Request deleted successfully!')
        ]);
    }
}
