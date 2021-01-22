<?php

namespace App\Http\Controllers;

use App\Models\ExtraPage;
use App\Models\SiteSetting;
use App\Models\MainSetting;
use App\Models\OpenGraph;
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
        $og = OpenGraph::where('locale', $locale)->where('name', 'testimonials')->first();
        return view('testimonials.index', ['listtype' => 'mine', 'setting' => $setting, 'og' => $og]);
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

    public function reviewData(Request $request)
    {

        $testimonialid = $request->testimonialid;
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $list = Review::where('testimonialid', $testimonialid)->where('locale', $locale)->get();

        return Datatables::of($list)

            ->addColumn('title', function ($item) {
                return $item->title;
            })
            ->addColumn('locale', function ($item) {
                return Config::get('app.locales')[$item->locale];
            })
            ->addColumn('action', function ($item) {
                $url1 = route('feedbacks.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function reviewDataEdit(Review $review)
    {
        dd($review);
        return view('testimonials.reviewEdit', ['review' => $review]);
    }



    public function reviewDataUpdate(Request $request, Review $review)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'embed' => 'required',
        ])->validate();

        $review->fill($input);

        $review->save();

        return redirect()->route('testimonials.index');
    }

    public function reviewDestroy(Review $review)
    {
        //
        Review::destroy($review->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
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
            $_testimonials = Testimonial::where('testimonialid', $item->testimonialid)->get();
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
            'image_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'locale' => 'required'
        ])->validate();

        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $input['locale'] = $locale;

        if (isset($_POST['testimonialid']) && $_POST['testimonialid'] != NULL && trim($_POST['testimonialid']) != "") {
            $checking = Testimonial::where('testimonialid', $request->testimonialid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('testimonials.index', ['errors' => ['English version exists already.']]);
            }
            $testimonialid = $request->input('testimonialid');
        } else {
            $testimonialid = substr(str_shuffle(self::$characters), 0, 10);
        }

        $input['testimonialid'] = $testimonialid;


        $testimonial = Testimonial::create($input);

        $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_1->extension();
        if (strpos($testimonial->image_1, 'upload') != false && is_file($testimonial->image_1))
            unlink($testimonial->image_1);
        $request->image_1->move(public_path('images/upload'), $image1);
        $testimonial->fill(['image_1' => 'images/upload/' . $image1]);

        $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_2->extension();
        if (strpos($testimonial->image_2, 'upload') != false && is_file($testimonial->image_2))
            unlink($testimonial->image_2);
        $request->image_2->move(public_path('images/upload'), $image2);
        $testimonial->fill(['image_2' => 'images/upload/' . $image2]);

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
        // dd($testimonial);
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
            'image_1' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'image_2' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ])->validate();


        if ($request->image_1 != null) {
            $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_1->extension();
            if (strpos($testimonial->image_1, 'upload') != false && is_file($testimonial->image_1))
                unlink($testimonial->image_1);
            $request->image_1->move(public_path('images/upload'), $image1);
            $input['image_1'] = 'images/upload/' . $image1;
        }

        if ($request->image_2 != null) {
            $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_2->extension();
            if (strpos($testimonial->image_2, 'upload') != false && is_file($testimonial->image_2))
                unlink($testimonial->image_2);
            $request->image_2->move(public_path('images/upload'), $image2);
            $testimonial->fill(['image_2' => 'images/upload/' . $image2]);
            $input['image_2'] = 'images/upload/' . $image2;
        }

        $testimonial->fill($input);
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
        Review::where('testimonialid', $testimonial->testimonialid)->delete();

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
        $extraPages = ExtraPage::where('locale', $locale)->get();
        $og = OpenGraph::where('locale', $locale)->where('name', 'testimonials')->first();
        // dd($locale);
        return view('testimonials', ['testimonials' => $testimonials, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'og' => $og]);
    }

    public function detail(Request $request)
    {
        # code...
        $id = $request->id;
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $testimonial = Testimonial::where('testimonialid', $id)->where('locale', $locale)->first();
        if ($testimonial == null) {
            $siteSetting = SiteSetting::where('locale', $locale)->first();
            $menuSetting = MainSetting::all();
            $extraPages = ExtraPage::where('locale', $locale)->get();
            $og = OpenGraph::where('locale', $locale)->where('name', '404')->first();
            return response()->view('404', ['siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'og' =>  $og], 404);
        }
        $reviews = Review::where('locale', $locale)->where('testimonialid', $id)->get();
        if (empty($reviews)) {
            $reviews = Review::where('locale', 'en')->where('testimonialid', $id)->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        $extraPages = ExtraPage::where('locale', $locale)->get();
        $og = Testimonial::where('locale', $locale)->where('testimonialid', $id)->first();
        // dd($locale);s
        return view('testimonials/detail', ['reviews' => $reviews, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'testimonial' => $testimonial, 'og' => $og]);
    }
}
