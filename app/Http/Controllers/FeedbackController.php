<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class FeedbackController extends Controller
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

        return view('feedbacks.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = session('locale');
        if ($locale == null) $locale = 'en';
        $testimonialid = $request->testimonialid;
        $list = Review::where('locale', $locale)->where('testimonialid', $testimonialid)->get();

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

    public function create(Request $request)
    {
        // dd($request->testimonialid);
        // $feedbacks = Review::where('locale', 'en')->get();
        // foreach ($feedbacks as $key => $item) {
        //     $_feedbacks = Review::where('reviewid', $item->reviewid)->get();
        //     if (count($_feedbacks) == 14)
        //         unset($feedbacks[$key]);
        // }

        return view("feedbacks.create", ['testimonialid' => $request->testimonialid]);
    }

    public function store(Request $request)
    {
        //
        // dd($request->testimonialid);
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'embed' => 'required',
        ])->validate();

        $locale = session('locale');
        if ($locale == null) $locale = 'en';
        $input['locale'] = $locale;
        $testimonial = Testimonial::where('testimonialid', $request->testimonialid)->where('locale', $locale)->first();
        // dd($testimonial);
        $type = $testimonial->title;
        $input['type'] = $type;
        $reviewid = substr(str_shuffle(self::$characters), 0, 10);
        // if (isset($_POST['reviewid']) && $_POST['reviewid'] != NULL && trim($_POST['reviewid']) != "") {
        //     $checking = Review::where('reviewid', $request->reviewid)->where('locale', $request->locale)->get();
        //     if (count($checking) > 0) {
        //         return redirect()->route('feedbacks.index', ['errors' => ['English version exists already.']]);
        //     }
        //     $reviewid = $request->input('reviewid');
        //     $one = Review::where('reviewid', $reviewid)->where('locale', 'en')->first();
        //     $type = $one->type;
        // } else {
        //     $reviewid = substr(str_shuffle(self::$characters), 0, 10);
        //     $type = 'Feedback';
        // }

        $input['reviewid'] = $reviewid;
        // $input['type'] = $type;

        $feedback = Review::create($input);

        // dd($request->testimonialid);

        $setting = SiteSetting::where('locale', $locale)->first();

        return view('testimonials.edit', ['testimonial' => $testimonial]);
        // return redirect()->route('testimonials.edit', $request->testimonial);
    }

    public function show(Review $feedback)
    {
        //
    }

    public function edit(Review $feedback)
    {
        $locale = session('locale');
        if($locale == null) $locale = 'en';
        $testimonial = Testimonial::where('locale', $locale)->where('testimonialid', $feedback->testimonialid)->first();
        return view('feedbacks.edit', ['feedback' => $feedback, 'testimonialid' => $testimonial->id]);
    }

    public function update(Request $request, Review $feedback)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'embed' => 'required',
        ])->validate();

        $feedback->fill($input);

        $feedback->save();

        $testimonialid = $feedback->testimonialid;

        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $testimonial = Testimonial::where('testimonialid', $testimonialid)->where('locale', $locale)->first();
        $id = $testimonial->id;

        return redirect()->route('testimonials.edit', $id);
    }

    public function destroy(Review $feedback)
    {
        //
        Review::destroy($feedback->id);
        $testimonialid = $feedback->testimonialid;
        $locale = session('locale');
        if($locale == null) $locale = 'en';
        $testimonial = Testimonial::where('locale', $locale)->where('testimonialid', $testimonialid)->first();

        // return redirect()->route('testimonials.edit', $testimonial->id);
        return response()->json([
            'success' => __('Client deleted successfully!'),
            'testimonialid' => $testimonial->id
        ]);
    }
}
