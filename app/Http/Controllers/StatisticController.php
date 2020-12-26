<?php

namespace App\Http\Controllers;

use App\Statistic;
use Illuminate\Http\Request;
use App\User;
use App\Client;

class StatisticController extends Controller
{
    protected $user;

    public function __construct()
    {
        // $this->middleware('auth');
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
        return view('statistics.index');
    }

    public function log_data(){
        
        $list = [];
        if ($this->user->roleno == User::ROLE_MASTER) {
            $list = Statistic::all();
        }else{
            $list = Statistic::where('reseller_id', $this->user->id)->get();            
        }

        return \Datatables::of($list)            
            ->addColumn('reseller', function ($item) {                  
                return $item->reseller->name;
            })
            ->addColumn('acttype', function ($item) {                                  
                return __(Statistic::ACTION_NAMES[$item->acttype]);
            })
            ->addColumn('client_name', function ($item) { 
                if($item->client_id != null)
                    return "<a href='".route('clients.edit', $item->client_id)."'>{$item->client->name}</a>";
                else    return $item->client_name;
            })
            ->rawColumns(['client_name'])  
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
     * @param  \App\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function show(Statistic $statistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function edit(Statistic $statistic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statistic $statistic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistic $statistic)
    {
        //
    }
}
