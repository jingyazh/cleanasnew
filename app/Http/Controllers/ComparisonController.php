<?php

namespace App\Http\Controllers;

use App\Models\Comparison;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class ComparisonController extends Controller
{

    protected $user;
    static $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function __construct()
    {
        $this->middleware('auth');
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

        return view('comparison_setting.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function comparisons_data(Request $request)
    {

        $list = Comparison::all();

        return Datatables::of($list)

            ->addColumn('title', function ($item) {
                return $item->title;
            })
            ->addColumn('image1', function ($item) {
                return " <a href='/{$item->image_landing_1}' target='_blank'> " . "<img style='height: 50px;' src='/{$item->image_landing_1}' />" . " </a> ";
            })
            ->addColumn('image2', function ($item) {
                return " <a href='/{$item->image_landing_2}' target='_blank'> " . "<img style='height: 50px;' src='/{$item->image_landing_2}' />" . " </a> ";
            })
            ->addColumn('locale', function ($item) {
                return Config::get('app.locales')[$item->locale];
            })
            ->addColumn('action', function ($item) {
                $url1 = route('comparisons.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image1', 'image2'])
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("comparison_setting.create", []);
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

        Validator::make($request->all(), [
            'title' => 'required',
            'image_landing_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_landing_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'embed' => 'required',
            'locale' => 'required'
        ])->validate();

        $comparison = Comparison::create([
            'compareid' => substr(str_shuffle(self::$characters), 0, 10),
            'title' => '',
            'image_landing_1' => '',
            'image_landing_2' => '',
            'embed' => '',
            'article_image' => '',
            'locale' => '',
        ]);

        $comparison->fill($input);

        $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_1->extension();
        if (strpos($comparison->image_landing_1, 'upload') != false && is_file($comparison->image_landing_1))
            unlink($comparison->image_landing_1);
        $request->image_landing_1->move(public_path('images/upload'), $image1);
        $comparison->fill(['image_landing_1' => 'images/upload/' . $image1]);
        
        $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_2->extension();
        if (strpos($comparison->image_landing_2, 'upload') != false && is_file($comparison->image_landing_2))
            unlink($comparison->image_landing_2);
        $request->image_landing_2->move(public_path('images/upload'), $image2);
        $comparison->fill(['image_landing_2' => 'images/upload/' . $image2]);

        $comparison->save();

        return redirect()->route('comparisons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comparison  $comparison
     * @return \Illuminate\Http\Response
     */
    public function show(Comparison $comparison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comparison  $comparison
     * @return \Illuminate\Http\Response
     */
    public function edit(Comparison $comparison)
    {
        return view('comparison_setting.edit', ['comparison' => $comparison]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comparison  $comparison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comparison $comparison)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image_landing_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_landing_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'embed' => 'required',
        ])->validate();

        $comparison->fill($input);

        if ($request->image_landing_1 != null) {
            $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_1->extension();
            if (strpos($comparison->image_landing_1, 'upload') != false && is_file($comparison->image_landing_1))
                unlink($comparison->image_landing_1);
            $request->image_landing_1->move(public_path('images/upload'), $image1);
            $comparison->fill(['image_landing_1' => 'images/upload/' . $image1]);
        }

        if ($request->image_landing_2 != null) {
            $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_2->extension();
            if (strpos($comparison->image_landing_2, 'upload') != false && is_file($comparison->image_landing_2))
                unlink($comparison->image_landing_2);
            $request->image_landing_2->move(public_path('images/upload'), $image2);
            $comparison->fill(['image_landing_2' => 'images/upload/' . $image2]);
        }

        $comparison->save();

        return redirect()->route('comparisons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comparison  $comparison
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comparison $comparison)
    {
        //
        Comparison::destroy($comparison->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }
}
