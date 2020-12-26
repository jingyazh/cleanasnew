<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Illuminate\Support\Collection;
use App\Subscripttype;
use App\Statistic;
use Carbon\Carbon;
use Validator;
use Redirect;
use Mail;


class ClientController extends Controller
{
    protected $user;

    public function __construct()
    {
        // // $this->middleware('auth');  
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();    

            date_default_timezone_set('America/Toronto');        //..."Europe/London"

            return $next($request);
        });    

    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //... At first , check expire clients and do process.
        
        return view('clients.index', ['listtype'=>'mine']);
    }





    
    //... for DataTable Data
    public function clients_data(Request $request){

        $user = Auth::user();
        $list = ($user->roleno == User::ROLE_MASTER) ? 
                    Client::all() : $user->myclients();
        

        return Datatables::of($list)

            ->addColumn('name', function ($item) {  
                return $item->fname." ".$item->lname;
            })
            ->addColumn('reseller', function ($item) {  
                return $item->reseller->name;
            })
            ->addColumn('action', function ($item) {
                $url1 = route('clients.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> ".__('Detail')." </a> ";
                $url2 = route('tickets.createex', $item->id);
                $neworderurl = " <a href='{$url2}'> ".__('PlaceOrder')." </a> ";
                $url3 = route('clients.edit', $item->id);
                $color1=$item->is_disabled === 1 ? 'black': 'gray';
                $msg1 = $item->is_disabled === 1 ? 'Enable':'Suspend';
                $btn1 = "<a style='color:{$color1}' href='#' onclick='return makeStatus({$item->id}, \"status\" )'><i class='fa fa-power-off'> ".__($msg1)." </i></a>";

                
                return $neworderurl.$btn1.$modifyurl;
            })
            ->rawColumns(['action'])
            ->make(true);        
    }    

    //... Change Client's status
    public function change_status(Request $request){
        $type = $request->type;
        $id = $request->id;
        $client = Client::find($id);

        if($type == 'status') {
            $client->is_disabled = 1 - $client->is_disabled;
        }
        $client->save();

        $statusstr = $client->is_disabled === 1 ? 'Enable':'Suspend';

        $str = __("Hi, Sir!")." \n\n";
        $str .= __("Name")." : ". $client->name. "\n";
        $str .= __("Status")." : ". __($statusstr). "\n";
        $str .= "\n\n".__("Best Regards.");
        
        // Mail::raw($str, function($message) {
        //     $message->subject(__("Customer Status was changed"));
        //     $message->to('silverbead0815@126.com');
        // });
        $APP_EMAIL_SENDING = env("APP_EMAIL_SENDING", false);

        if ($APP_EMAIL_SENDING) {
            Mail::raw($str, function($message) {
                $message->subject(__("Customer Status was changed"));
                $message->to('suspend@clubinternet.ca');
            });
        }

        return response()->json([
            'success' => __('Successfully Done!')
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
       
        return view("clients.create", ['provinces'=> Client::PROVINCES]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        //... validation
        $validator = Validator::make($request->all(),[
            'fname' => 'required',   
            'lname' => 'required',
            'addr1' => 'required',
            'city' => 'required',
            'province' => 'required',


            'zipcode' => 'required',
            'phone' => 'required',      
        ])->validate();

        
        //...Check 
        $client = new Client;           

        $client->fill($input)->resellerid = $this->user->id;       
        
        $client->save();

        return (intval($input['isautoplaceorder']) == 1) ?  redirect()->route('tickets.createex', $client->id)
            : redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {   
        return view('clients.edit', ['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
        $input = $request->all();

        Validator::make($request->all(),[
            'fname' => 'required',   
            'lname' => 'required',
            'addr1' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',               
        ])->validate(); 

        
        $client->fill($input);
        $client->save();

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
        Client::destroy($client->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }
}
