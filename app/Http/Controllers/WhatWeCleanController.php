<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Models\WhatWeClean;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class WhatWeCleanController extends Controller
{

    protected $user;
    static $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();

            date_default_timezone_set('America/Toronto');        //..."Europe/London"

            return $next($request);
        });
    }

    public function index()
    {
        //... At first , check expire clients and do process.

        return view('cleans.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = WhatWeClean::where('locale', $locale)->get();

        return Datatables::of($list)

            ->addColumn('title', function ($item) {
                return $item->title;
            })
            ->addColumn('image', function ($item) {
                return " <a href='/{$item->image}' target='_blank'> " . "<img style='height: 50px;' src='/{$item->image}' />" . " </a> ";
            })
            ->addColumn('locale', function ($item) {
                return Config::get('app.locales')[$item->locale];
            })
            ->addColumn('action', function ($item) {
                $url1 = route('cleans.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {

        $cleans = WhatWeClean::where('locale', 'en')->get();
        foreach ($cleans as $key => $item) {
            $_cleans = WhatWeClean::where('cleanid', $item->cleanid)->get();
            if (count($_cleans) == 14)
                unset($cleans[$key]);
        }

        return view("cleans.create", ['cleans' => $cleans]);
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'locale' => 'required',
            'embed' => 'required',
        ])->validate();

        if (isset($_POST['cleanid']) && $_POST['cleanid'] != NULL && trim($_POST['cleanid']) != "") {
            $checking = WhatWeClean::where('cleanid', $request->cleanid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('cleans.index', ['errors' => ['English version exists already.']]);
            }
            $cleanid = $request->input('cleanid');
            $one = WhatWeClean::where('cleanid', $cleanid)->where('locale', 'en')->first();
            $type = $one->type;
        }else {
            $cleanid = substr(str_shuffle(self::$characters), 0, 10);
            $type = '';
        }

        $input['cleanid'] = $cleanid;
        $input['type'] = $type;

        $clean = WhatWeClean::create($input);

        $image = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
        $request->image->move(public_path('images/upload'), $image);
        $clean->fill(['image' => 'images/upload/' . $image]);

        $clean->save();

        return redirect()->route('cleans.index');
    }

    public function show(WhatWeClean $clean)
    {
        //
    }

    public function edit(WhatWeClean $clean)
    {
        return view('cleans.edit', ['clean' => $clean]);
    }

    public function update(Request $request, WhatWeClean $clean)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required',
            'embed' => 'required',
        ])->validate();

        $clean->fill($input);

        if ($request->image != null) {
            $image = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
            if (strpos($clean->image, 'upload') != false && is_file($clean->image))
                unlink($clean->image);
            $request->image->move(public_path('images/upload'), $image);
            $clean->fill(['image' => 'images/upload/' . $image]);
        }

        $clean->save();

        return redirect()->route('cleans.index');
    }

    public function view(Request $request)
    {
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $data = WhatWeClean::where('locale', $locale)->get();
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        // dd($data);
        return view('what-we-clean', ['data' => $data, 'siteSetting' => $siteSetting]);
    }
    public function destroy(WhatWeClean $clean)
    {
        //
        WhatWeClean::destroy($clean->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }
}
