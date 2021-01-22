<?php

namespace App\Http\Controllers;

use App\Models\Comparison;
use App\Models\ExtraPage;
use App\Models\SiteSetting;
use App\Models\MainSetting;
use App\Models\OpenGraph;
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
        // $this->middleware('auth');
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
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $setting = SiteSetting::where('locale', $locale)->first();
        $og = OpenGraph::where('locale', $locale)->where('name', 'how_we_compare')->first();

        return view('comparison_setting.index', ['listtype' => 'mine', 'setting' => $setting, 'og' => $og]);
    }

    //... for DataTable Data
    public function comparisons_data(Request $request)
    {
        $locale = $request->locale;
        $list = Comparison::where('locale', $locale)->get();

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

        $comparisons = Comparison::where('locale', 'en')->get();
        foreach ($comparisons as $key => $item) {
            $_comparisons = Comparison::where('compareid', $item->compareid)->get();
            if (count($_comparisons) == 14)
                unset($comparisons[$key]);
        }

        return view("comparison_setting.create", ['comparisons' => $comparisons]);
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
            'image_landing_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image_landing_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'embed' => 'required',
            // 'locale' => 'required'
        ])->validate();

        $locale = session('locale');
        if ($locale == null) $locale;
        $input['locale'] = $locale;

        if (isset($_POST['compareid']) && $_POST['compareid'] != NULL && trim($_POST['compareid']) != "") {
            $checking = Comparison::where('compareid', $request->compareid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('comparisons.index', ['errors' => ['English version exists already.']]);
            }
            $compareid = $request->input('compareid');
        }else {
            $compareid = substr(str_shuffle(self::$characters), 0, 10);
        }

        $input['compareid'] = $compareid;
      
        
        $comparison = Comparison::create($input); 

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
            'image_landing_1' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'image_landing_2' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'embed' => 'required',
        ])->validate();


        if ($request->image_landing_1 != null) {
            $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_1->extension();
            if (strpos($comparison->image_landing_1, 'upload') != false && is_file($comparison->image_landing_1))
                unlink($comparison->image_landing_1);
            $request->image_landing_1->move(public_path('images/upload'), $image1);
            $input['image_landing_1'] = 'images/upload/' . $image1;
        }

        if ($request->image_landing_2 != null) {
            $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_2->extension();
            if (strpos($comparison->image_landing_2, 'upload') != false && is_file($comparison->image_landing_2))
                unlink($comparison->image_landing_2);
            $request->image_landing_2->move(public_path('images/upload'), $image2);
            $input['image_landing_2'] = 'images/upload/' . $image2;
        }

        $comparison->fill($input);
        $comparison->save();

        return redirect()->route('comparisons.index');
    }

    public function view(Request $request)
    {
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $comparisons = Comparison::where('locale', $locale)->get();
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        $extraPages = ExtraPage::where('locale', $locale)->get();
        $og = OpenGraph::where('locale', $locale)->where('name', 'how_we_compare')->first();
        // dd($locale);
        return view('how-we-compare', ['comparisons' => $comparisons, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'og' => $og]);
    }

    public function detail(Request $request)
    {
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $comparison = Comparison::where('compareid', $request->id)->where('locale', $locale)->first();
        if ($comparison == null) {
            $siteSetting = SiteSetting::where('locale', $locale)->first();
            $menuSetting = MainSetting::all();
            $extraPages = ExtraPage::where('locale', $locale)->get();
            $og = OpenGraph::where('locale', $locale)->where('name', '404')->first();
            return response()->view('404', ['siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'og' =>  $og], 404);
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        $extraPages = ExtraPage::where('locale', $locale)->get();
        return view('comparisons.index', ['comparison' => $comparison, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages]);
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
