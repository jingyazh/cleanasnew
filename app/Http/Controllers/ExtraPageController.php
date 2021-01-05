<?php

namespace App\Http\Controllers;

use App\Models\ExtraPage;
use App\Models\MainSetting;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Validator;

class ExtraPageController extends Controller
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
        $input = $request->all();

        // dd($input);
        // exit;
        Validator::make($request->all(), [
            'title' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'embed' => 'required',
        ])->validate();

        $input['is_visible'] = false;
        $input['locale'] = session('locale');
        $setting = ExtraPage::create($input);
        

        $setting->save();

        return redirect()->route('settings.index');
    }

    public function view(Request $request)
    {
        // dd($request->id);
        $locale = session('locale');
        if ($locale == null) $locale = 'en';
        $extraPage = ExtraPage::where('id', $request->id)->first();
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        $extraPages = ExtraPage::where('locale', $locale)->get();
        return view('extraPage', ['siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'extraPage' => $extraPage]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExtraPage  $extraPage
     * @return \Illuminate\Http\Response
     */
    public function show(ExtraPage $extraPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExtraPage  $extraPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ExtraPage $extraPage)
    {
        // dd($extraPage);
        return view('settings.edit', ['extraPage' => $extraPage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExtraPage  $extraPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExtraPage $extraPage)
    {
        //
        $input = $request->all();

        // dd($input);
        // exit;
        Validator::make($request->all(), [
            'title' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'embed' => 'required',
        ])->validate();
        
        $input['is_visible'] = $extraPage->is_visible;
        $input['locale'] = $extraPage->locale;
        $extraPage->fill($input);
        $extraPage->save();

        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExtraPage  $extraPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExtraPage $extraPage)
    {
        //
        ExtraPage::destroy($extraPage->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }
}
