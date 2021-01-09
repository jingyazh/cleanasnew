<?php

namespace App\Http\Controllers;

use App\Models\ExtraPage;
use App\Models\Faq;
use App\User;
use App\Models\SiteSetting;
use App\Models\MainSetting;
use App\Models\OpenGraph;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class FaqController extends Controller
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
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $setting = SiteSetting::where('locale', $locale)->first();
        $og = OpenGraph::where('locale', $locale)->where('name', 'faq')->first();
        return view('faqs.index', ['listtype' => 'mine', 'setting' => $setting, 'og' => $og]);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = Faq::where('locale', $locale)->get();

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
                $url1 = route('faqs.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {

        $faqs = Faq::where('locale', 'en')->get();
        foreach ($faqs as $key => $item) {
            $_faqs = Faq::where('faqid', $item->faqid)->get();
            if (count($_faqs) == 14)
                unset($faqs[$key]);
        }

        return view("faqs.create", ['faqs' => $faqs]);
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

        if (isset($_POST['faqid']) && $_POST['faqid'] != NULL && trim($_POST['faqid']) != "") {
            $checking = Faq::where('faqid', $request->faqid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('faqs.index', ['errors' => ['English version exists already.']]);
            }
            $faqid = $request->input('faqid');
            $one = Faq::where('faqid', $faqid)->where('locale', 'en')->first();
            $type = $one->type;
        } else {
            $faqid = substr(str_shuffle(self::$characters), 0, 10);
            $type = '';
        }

        $input['faqid'] = $faqid;
        $input['type'] = $type;

        $faq = Faq::create($input);

        return redirect()->route('faqs.index');
    }

    public function show(Faq $faq)
    {
        //
    }

    public function edit(Faq $faq)
    {
        return view('faqs.edit', ['faq' => $faq]);
    }

    public function update(Request $request, Faq $faq)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'embed' => 'required',
        ])->validate();

        $faq->fill($input);

        $faq->save();

        return redirect()->route('faqs.index');
    }

    public function destroy(Faq $faq)
    {
        //
        Faq::destroy($faq->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }

    //  added by 0603 ///
    public function view(Request $request)
    {
        # code...
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $faqs = Faq::where('locale', $locale)->get();
        if (empty($faqs)) {
            $faqs = Faq::where('locale', 'en')->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        // dd($locale);
        $extraPages = ExtraPage::where('locale', $locale)->get();
        $og = OpenGraph::where('locale', $locale)->where('name', 'faq')->first();
        return view('faq', ['faqs' => $faqs, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'og' => $og]);
    }
}
