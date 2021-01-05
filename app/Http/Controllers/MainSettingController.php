<?php

namespace App\Http\Controllers;

use App\Models\ExtraPage;
use App\Models\MainSetting;
use Illuminate\Http\Request;

class MainSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\MainSetting  $mainSetting
     * @return \Illuminate\Http\Response
     */
    public function show(MainSetting $mainSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainSetting  $mainSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(MainSetting $mainSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainSetting  $mainSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //   
    }

    public function pageVisibleSetting(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $all = MainSetting::all();
        foreach ($all as $value) {
            if (isset($input[$value->key])){
                // dd($value);
                MainSetting::where('key', $value->key)->update([
                    'value' => '1'
                ]);
            } else {
                // dd($value);
                MainSetting::where('key', $value->key)->update([
                    'value' => '0'
                ]);
            }
        }
        
        $extraPages = ExtraPage::all();
        foreach ($extraPages as $value) {
            if (isset($input[str_replace(' ', '_', $value->title)])){
                ExtraPage::where('id', $value->id)->update([
                    'is_visible' => '1'
                ]);
            } else {
                ExtraPage::where('id', $value->id)->update([
                    'is_visible' => '0'
                ]);
            }
        }
        return redirect()->route('settings.index');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainSetting  $mainSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainSetting $mainSetting)
    {
        //
    }
}
