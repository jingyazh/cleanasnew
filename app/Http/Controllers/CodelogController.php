<?php

namespace App\Http\Controllers;

use App\Codelog;
use Illuminate\Http\Request;
use App\User;

class CodelogController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = \Auth::user();    
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
        //
        return view('codelogs.index');
    }

    public function log_data(){
        
        $list = [];

        if ($this->user->roleno == User::ROLE_MASTER) {
            $list = Codelog::all();
        }else{
            $list = Codelog::where('from_rsid', $this->user->id)
                        ->orWhere('to_rsid', $this->user->id)->get();            
        }

        return \Datatables::of($list)            
            ->addColumn('from_reseller', function ($item) {                  
                return $item->send_reseller->name;
            })
            ->addColumn('to_reseller', function ($item) {                  
                return $item->receive_reseller->name;
            })           
            
            ->make(true);        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Codelog  $codelog
     * @return \Illuminate\Http\Response
     */
    public function show(Codelog $codelog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Codelog  $codelog
     * @return \Illuminate\Http\Response
     */
    public function edit(Codelog $codelog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Codelog  $codelog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Codelog $codelog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Codelog  $codelog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Codelog $codelog)
    {
        //
    }
}
