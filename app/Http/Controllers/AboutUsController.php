<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\SiteSetting;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class AboutUsController extends Controller
{

    protected $user;
    static $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function __construct()
    {
        // // $this->middleware('auth');
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

        return view('aboutus.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = AboutUs::where('locale', $locale)->get();

        return Datatables::of($list)

            ->addColumn('title', function ($item) {
                return $item->title;
            })
            ->addColumn('image', function ($item) {
                return " <a href='{$item->image}' target='_blank'> " . "<img style='height: 50px;' src='{$item->image}' />" . " </a> ";
            })
            ->addColumn('locale', function ($item) {
                return Config::get('app.locales')[$item->locale];
            })
            ->addColumn('action', function ($item) {
                $url1 = route('aboutus.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $aboutus = AboutUs::where('locale', 'en')->get();
        foreach ($aboutus as $key => $item) {
            $_aboutus = AboutUs::where('compid', $item->compid)->get();
            if (count($_aboutus) == 14)
                unset($aboutus[$key]);
        }

        return view("aboutus.create", ['aboutus' => $aboutus]);
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'locale' => 'required'
        ])->validate();

        if (isset($_POST['compid']) && $_POST['compid'] != NULL && trim($_POST['compid']) != "") {
            $checking = AboutUs::where('compid', $request->compid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('aboutus.index', ['errors' => ['English version exists already.']]);
            }
            $compid = $request->input('compid');
        }else {
            $compid = substr(str_shuffle(self::$characters), 0, 10);
        }

        $input['compid'] = $compid;
      
        
        $aboutus = AboutUs::create($input); 

        $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
        if (strpos($aboutus->image, 'upload') != false && is_file($aboutus->image))
            unlink($aboutus->image);
        $request->image->move(public_path('images/upload'), $image1);
        $aboutus->fill(['image' => 'images/upload/' . $image1]);

        $aboutus->save();

        return redirect()->route('aboutus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $aboutus)
    {
        return view('aboutus.edit', ['aboutus' => $aboutus]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $aboutus)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ])->validate();

        $aboutus->fill($input);

        if ($request->image != null) {
            $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
            if (strpos($aboutus->image, 'upload') != false && is_file($aboutus->image))
                unlink($aboutus->image);
            $request->image->move(public_path('images/upload'), $image1);
            $aboutus->fill(['image' => 'images/upload/' . $image1]);
        }

        $aboutus->save();

        return redirect()->route('aboutus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $aboutus)
    {
        //
        AboutUs::destroy($aboutus->id);

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
        $abouts = AboutUs::where('locale', $locale)->get();
        if (empty($esges)) {
            $abouts = AboutUs::where('locale', 'en')->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        // dd($locale);
        return view('about-us', ['abouts' => $abouts, 'siteSetting' => $siteSetting]);
    }
}
