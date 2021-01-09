<?php

namespace App\Http\Controllers;

use App\Models\ESG;
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

class ESGController extends Controller
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

    public function index()
    {
        //... At first , check expire clients and do process.
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $setting = SiteSetting::where('locale', $locale)->first();
        $og = OpenGraph::where('locale', $locale)->where('name', 'esg')->first();
        return view('esgs.index', ['listtype' => 'mine', 'setting' => $setting, 'og' => $og]);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = ESG::where('locale', $locale)->get();

        return Datatables::of($list)

            ->addColumn('title', function ($item) {
                $options = array(
                    'ignore_errors' => true,
                    'drop_links' => true,
                    // other options go here
                );
                $text = \Soundasleep\Html2Text::convert($item->title, $options);
                return $text;
            })
            ->addColumn('locale', function ($item) {
                return Config::get('app.locales')[$item->locale];
            })
            ->addColumn('action', function ($item) {
                $url1 = route('esgs.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {

        $esgs = ESG::where('locale', 'en')->get();
        foreach ($esgs as $key => $item) {
            $_esgs = ESG::where('esgid', $item->esgid)->get();
            if (count($_esgs) == 14)
                unset($esgs[$key]);
        }

        return view("esgs.create", ['esgs' => $esgs]);
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'locale' => 'required',
            'embed' => 'required',
        ])->validate();

        if (isset($_POST['esgid']) && $_POST['esgid'] != NULL && trim($_POST['esgid']) != "") {
            $checking = ESG::where('esgid', $request->esgid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('esgs.index', ['errors' => ['English version exists already.']]);
            }
            $esgid = $request->input('esgid');
            $one = ESG::where('esgid', $esgid)->where('locale', 'en')->first();
            $type = $one->type;
        } else {
            $esgid = substr(str_shuffle(self::$characters), 0, 10);
            $type = '';
        }

        $input['esgid'] = $esgid;
        $input['type'] = $type;

        $esg = ESG::create($input);

        return redirect()->route('esgs.index');
    }

    public function show(ESG $esg)
    {
        //
    }

    public function edit(ESG $esg)
    {
        return view('esgs.edit', ['esg' => $esg]);
    }

    public function update(Request $request, ESG $esg)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'embed' => 'required',
        ])->validate();

        $esg->fill($input);

        $esg->save();

        return redirect()->route('esgs.index');
    }

    public function destroy(ESG $esg)
    {
        //
        ESG::destroy($esg->id);

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
        $esges = ESG::where('locale', $locale)->get();
        if (empty($esges)) {
            $esges = ESG::where('locale', 'en')->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        $extraPages = ExtraPage::where('locale', $locale)->get();
        $og = OpenGraph::where('locale', $locale)->where('name', 'esg')->first();
        // dd($locale);
        return view('esg', ['esges' => $esges, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'og' => $og]);

    }

    public function esgHelp()
    {
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        // $esges = ESG::where('locale', $locale)->get();
        // if (empty($esges)) {
        //     $esges = ESG::where('locale', 'en')->get();
        // }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        $extraPages = ExtraPage::where('locale', $locale)->get();
        // dd($locale);
        return view('esg.how-better-cleaning-can-help', ['siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages]);
    }
}
