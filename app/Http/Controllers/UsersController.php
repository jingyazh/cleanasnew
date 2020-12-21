<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;
use Datatables;
use Message;
use App\Codelog;


class UsersController extends Controller
{
    protected $user;


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user(); 

            date_default_timezone_set('America/Toronto');        //..."Europe/London"

            return $next($request);
        });

        // $this->cuser = Auth::user(); //... this is not work        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //... URL: /users   route name: 'users.index'
    public function index()
    {
        //                
        return view('users.index');
    }

    public function users_data(){
        $user = $this->user;

        if ($user->roleno > User::ROLE_REGULAR) return;

        $list = ($user->roleno == User::ROLE_MASTER) ? 
            User::where('roleno', '!=', User::ROLE_MASTER)->get() : $user->childsellers();

        return Datatables::of($list)            
            ->addColumn('username', function ($item) {  
                $color=$item->roleno == User::ROLE_SUPER ? 'red': '#007bff';
                return "<a style='color:{$color}' href='".route('users.edit', $item->id)."'>{$item->username}</a>";
            })  
            ->addColumn('clientscount', function ($item) {
                return $item->myclientscount(). " / ". $item->myclientsactivecount();
            })          
            // ->addColumn('status', function ($item) {
            //     return ($item->is_disabled) ? 'Disabled' : 'Active';
            // })
            ->addColumn('action', function ($item) {
                
                $url1 = route('users.edit', $item->id);
                $addurl = " <a href='{$url1}'> ".__('Edit')." </a> ";

                $color1=$item->is_disabled === 1 ? 'black': 'gray';
                $msg1 = $item->is_disabled === 1 ? 'Enable':'Disable';

                $btn1 = "<a style='color:{$color1}' href='#' onclick='return makeStatus({$item->id}, \"status\" )'><i class='fa fa-power-off'> ".__($msg1)." </i></a>";
                
              
                return $addurl.$btn1;
            })
            ->rawColumns(['username', 'action'])
            ->make(true);        
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //... /users/create
    public function create()
    {
        //
        return view('users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //...
                
        $input = $request->all();

        //... validation

        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255', //...unique:users|
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
        ]); //->validate();

       
        $validator->validate();        

        //... create user
        $user = new User;
        $user->fill($input)->roleno = User::ROLE_REGULAR;
        $user->parentno = $this->user->id;
        $user->save();

        
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        $user->password = "Password was encrypted";

        return view('users.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if(array_key_exists('password', $input) && 
            ($request->password == null || trim($request->password) == "")){
            unset($input['password']);
        }

        $user = User::find($id);
        
        Validator::make($request->all(),[
            'name' =>  ($user->name != $request->name) ? 'required|unique:users|max:255':'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
        ])->validate();        
        
        $user->fill($input);
        
        $user->save();
        return redirect()->route('users.index');

    }

    public function masterupdate(Request $request) {
        $curuser = Auth::user();
        
        if ($curuser->roleno !== User::ROLE_MASTER) {
            return redirect()->back()->with('error', '');
        }

        $input = $request->all();
        if( array_key_exists('password', $input) &&             
            $request->password != null && trim($request->password) !== ""){
            
            $curuser->password = $request->password;
            $curuser->save();
        }        
        return redirect()->route('home');
    }


    //... Change User's state
    public function change_status(Request $request){
        
        $type = $request->type;
        $id = $request->id;
        $user = User::find($id);

        if($type == 'status') {
            $user->is_disabled = 1 - $user->is_disabled;
        }
        $user->save();

        return response()->json([
            'success' => __('Successfully Done!')
        ]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        //...merge Xtream
       
        $user = User::find($id);


        User::destroy($id);

        return response()->json([
            'success' => __('Reseller deleted successfully!')
        ]);
    }



    public function vip_codes()
    {        
        if($this->user->roleno == User::ROLE_MASTER){
            return view('vip_codes', ['resellers'=>User::all()]); //User::where('parentno', '!=' , 0)
        }        
    }    
}
