<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use App\Models\AboutUs;
use App\Models\ExtraPage;
use App\Models\SiteSetting;
use App\Models\MainSetting;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class AboutCompanyController extends Controller
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

    public function index()
    {
        //... At first , check expire clients and do process.

        return view('aboutcompany.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = AboutCompany::where('locale', $locale)->get();

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
                $url1 = route('aboutcompany.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {

        $aboutcompany = AboutCompany::where('locale', 'en')->get();
        
        foreach ($aboutcompany as $key => $item) {
            $_aboutcompany = AboutCompany::where('articleid', $item->articleid)->get();
            if (count($_aboutcompany) == 14)
                unset($aboutcompany[$key]);
        }
        // dd($aboutcompany);
        // exit;
        return view("aboutcompany.create", ['aboutcompany' => $aboutcompany]);
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();

        // dd($input);
        Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'embed' => 'required',
        ])->validate();

        $locale = session('locale');
        if ($locale == null) $locale = 'en';
        $input['locale'] = $locale;

        if (isset($_POST['articleid']) && $_POST['articleid'] != NULL && trim($_POST['articleid']) != "") {
            $checking = AboutCompany::where('articleid', $request->articleid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('aboutcompany.index', ['errors' => ['English version exists already.']]);
            }
            $articleid = $request->input('articleid');
            $one = AboutCompany::where('articleid', $articleid)->where('locale', 'en')->first();
        }else {
            $articleid = substr(str_shuffle(self::$characters), 0, 10);
        }

        $input['articleid'] = $articleid;

        $aboutcompany = AboutCompany::create($input);

        $image = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
        $request->image->move(public_path('images/upload'), $image);
        $aboutcompany->fill(['image' => 'images/upload/' . $image]);

        $aboutcompany->save();

        return redirect()->route('aboutus.index');
    }

    public function show(AboutCompany $aboutcompany)
    {
        //
    }

    public function edit(AboutCompany $aboutcompany)
    {
        return view('aboutcompany.edit', ['aboutcompany' => $aboutcompany]);
    }

    public function update(Request $request, AboutCompany $aboutcompany)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'embed' => 'required',
        ])->validate();

        $aboutcompany->fill($input);

        if ($request->image != null) {
            $image = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
            if (strpos($aboutcompany->image, 'upload') != false && is_file($aboutcompany->image))
                unlink($aboutcompany->image);
            $request->image->move(public_path('images/upload'), $image);
            $aboutcompany->fill(['image' => 'images/upload/' . $image]);
        }

        $aboutcompany->save();

        return redirect()->route('aboutus.index');
    }

    public function destroy(AboutCompany $aboutcompany)
    {
        //
        AboutCompany::destroy($aboutcompany->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }

    public function view()
    {
        # code...
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $companies = AboutCompany::where('locale', $locale)->get();
        if (empty($companies)) {
            $companies = AboutCompany::where('locale', 'en')->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        $extraPages = ExtraPage::where('locale', $locale)->get();
        $og = AboutUs::where('locale', $locale)->where('compid', '22222222')->first();
        // dd($locale);
        return view('about-us.index', ['companies' => $companies, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'og' => $og]);
    }
}
