<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Models\MainSetting;
use App\Models\Testimonial;
use App\Models\Review;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class TestimonialController extends Controller
{

    protected $user;
    static $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware(function ($request, $next) {
        //     $this->user = Auth::user();

        //     date_default_timezone_set('America/Toronto');        //..."Europe/London"

        //     return $next($request);
        // });
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
        return view('testimonials.index', ['listtype' => 'mine', 'setting' => $setting]);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = Testimonial::where('locale', $locale)->get();

        return Datatables::of($list)

            ->addColumn('title', function ($item) {
                return $item->title;
            })
            ->addColumn('image1', function ($item) {
                return " <a href='/{$item->image_1}' target='_blank'> " . "<img style='height: 50px;' src='/{$item->image_1}' />" . " </a> ";
            })
            ->addColumn('image2', function ($item) {
                return " <a href='/{$item->image_2}' target='_blank'> " . "<img style='height: 50px;' src='/{$item->image_2}' />" . " </a> ";
            })
            ->addColumn('locale', function ($item) {
                return Config::get('app.locales')[$item->locale];
            })
            ->addColumn('action', function ($item) {
                $url1 = route('testimonials.edit', $item->id);
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

        $testimonials = Testimonial::where('locale', 'en')->get();
        foreach ($testimonials as $key => $item) {
            $_testimonials = Testimonial::where('serviceid', $item->serviceid)->get();
            if (count($_testimonials) == 14)
                unset($testimonials[$key]);
        }

        return view("testimonials.create", ['testimonials' => $testimonials]);
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
            'locale' => 'required'
        ])->validate();

        if (isset($_POST['serviceid']) && $_POST['serviceid'] != NULL && trim($_POST['serviceid']) != "") {
            $checking = Testimonial::where('serviceid', $request->serviceid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('testimonials.index', ['errors' => ['English version exists already.']]);
            }
            $serviceid = $request->input('serviceid');
        }else {
            $serviceid = substr(str_shuffle(self::$characters), 0, 10);
        }

        $input['serviceid'] = $serviceid;


        $testimonial = Testimonial::create($input);

        $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_1->extension();
        if (strpos($testimonial->image_landing_1, 'upload') != false && is_file($testimonial->image_landing_1))
            unlink($testimonial->image_landing_1);
        $request->image_landing_1->move(public_path('images/upload'), $image1);
        $testimonial->fill(['image_landing_1' => 'images/upload/' . $image1]);

        $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_2->extension();
        if (strpos($testimonial->image_landing_2, 'upload') != false && is_file($testimonial->image_landing_2))
            unlink($testimonial->image_landing_2);
        $request->image_landing_2->move(public_path('images/upload'), $image2);
        $testimonial->fill(['image_landing_2' => 'images/upload/' . $image2]);

        $testimonial->save();

        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('testimonials.edit', ['testimonial' => $testimonial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image_landing_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_landing_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ])->validate();

        $testimonial->fill($input);

        if ($request->image_landing_1 != null) {
            $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_1->extension();
            if (strpos($testimonial->image_landing_1, 'upload') != false && is_file($testimonial->image_landing_1))
                unlink($testimonial->image_landing_1);
            $request->image_landing_1->move(public_path('images/upload'), $image1);
            $testimonial->fill(['image_landing_1' => 'images/upload/' . $image1]);
        }

        if ($request->image_landing_2 != null) {
            $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_2->extension();
            if (strpos($testimonial->image_landing_2, 'upload') != false && is_file($testimonial->image_landing_2))
                unlink($testimonial->image_landing_2);
            $request->image_landing_2->move(public_path('images/upload'), $image2);
            $testimonial->fill(['image_landing_2' => 'images/upload/' . $image2]);
        }

        $testimonial->save();

        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        Testimonial::destroy($testimonial->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }

    public function view(Request $request)
    {
        # code...
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $testimonials = Testimonial::where('locale', $locale)->get();
        if (empty($testimonials)) {
            $testimonials = Testimonial::where('locale', 'en')->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        // dd($locale);
        return view('testimonials', ['testimonials' => $testimonials, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting]);
    }

    public function detail(Request $request)
    {
        # code...
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $reviews = Review::where('locale', $locale)->where('testimonialid', $request->id)->get();
        if (empty($reviews)) {
            $reviews = Review::where('locale', 'en')->where('testimonialid', $request->id)->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        $title = Testimonial::where('testimonialid', $request->id)->first();
        // dd($locale);s
        return view('testimonials/detail', ['reviews' => $reviews, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'title' => $title->title]);
    }
}
