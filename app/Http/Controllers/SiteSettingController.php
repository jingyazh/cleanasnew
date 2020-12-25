<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class SiteSettingController extends Controller
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

    public function index(Request $request)
    {
        //... At first , check expire clients and do process.
        // if ($request->has('locale'))
        //     $locale = $request->locale;
        // else
        //     $locale = 'en';
        // $setting = SiteSetting::where('locale', $locale)->first();
        // if ($setting == null)
        //     $setting = SiteSetting::where('locale', 'en')->first();
        $locale = session('locale');
        $setting = SiteSetting::where('locale', $locale)->first();
        // dd($setting);
        // exit;
        return view('settings.index', ['listtype' => 'mine', 'setting' => $setting]);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = SiteSetting::where('locale', $locale)->get();

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
                $url1 = route('settings.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {

        $settings = SiteSetting::where('locale', 'en')->get();
        foreach ($settings as $key => $item) {
            $_settings = SiteSetting::where('id', $item->id)->get();
            if (count($_settings) == 14)
                unset($settings[$key]);
        }

        return view("settings.create", ['settings' => $settings]);
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();

        // dd($input);
        // exit;
        Validator::make($request->all(), [
            'home_embed' => 'required',
            'home_discounter' => 'required',
            'home_esg_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'comparison_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'comparison_txt' => 'required',
            'clean_slogan' => 'required',
            'service_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_txt' => 'required',
            'service_list_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'esg_banner_embed' => 'required',
            'footer_txt' => 'required',
        ])->validate();

        $input['locale'] = session('locale');
        $setting = SiteSetting::create($input);
        $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->home_esg_image->extension();
        if (strpos($setting->home_esg_image, 'upload') != false && is_file($setting->home_esg_image))
            unlink($setting->home_esg_image);
        $request->home_esg_image->move(public_path('images/upload'), $image1);
        $setting->fill(['home_esg_image' => 'images/upload/' . $image1]);

        $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->comparison_image->extension();
        if (strpos($setting->comparison_image, 'upload') != false && is_file($setting->comparison_image))
            unlink($setting->comparison_image);
        $request->comparison_image->move(public_path('images/upload'), $image2);
        $setting->fill(['comparison_image' => 'images/upload/' . $image2]);

        $image3 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->service_image->extension();
        if (strpos($setting->service_image, 'upload') != false && is_file($setting->service_image))
            unlink($setting->service_image);
        $request->service_image->move(public_path('images/upload'), $image3);
        $setting->fill(['service_image' => 'images/upload/' . $image3]);

        $image4 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->service_list_image->extension();
        if (strpos($setting->service_list_image, 'upload') != false && is_file($setting->service_list_image))
            unlink($setting->service_list_image);
        $request->service_list_image->move(public_path('images/upload'), $image4);
        $setting->fill(['service_list_image' => 'images/upload/' . $image4]);

        $setting->save();

        return redirect()->route('settings.index', ['setting' => $setting]);
    }

    public function show(SiteSetting $setting)
    {
        //
    }

    public function edit(SiteSetting $setting)
    {
        return view('settings.edit', ['setting' => $setting]);
    }

    public function update(Request $request, SiteSetting $setting)
    {
        //
        $input = $request->all();

        // dd($input);
        Validator::make($request->all(), [
            'home_embed' => 'required',
            'home_discounter' => 'required',
            'home_esg_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'comparison_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'comparison_txt' => 'required',
            'clean_slogan' => 'required',
            'service_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_txt' => 'required',
            'service_list_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'esg_banner_embed' => 'required',
            'footer_txt' => 'required',
        ])->validate();

        $input['locale'] = session('locale');
        $setting->fill($input);

        // dd($input);

        // $setting = SiteSetting::create($input);
        if ($request->home_esg_image != null) {
            $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->home_esg_image->extension();
            if (strpos($setting->home_esg_image, 'upload') != false && is_file($setting->home_esg_image))
                unlink($setting->home_esg_image);
            $request->home_esg_image->move(public_path('images/upload'), $image1);
            $setting->fill(['home_esg_image' => 'images/upload/' . $image1]);
        }

        if ($request->comparison_image != null) {
            $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->comparison_image->extension();
            if (strpos($setting->comparison_image, 'upload') != false && is_file($setting->comparison_image))
                unlink($setting->comparison_image);
            $request->comparison_image->move(public_path('images/upload'), $image2);
            $setting->fill(['comparison_image' => 'images/upload/' . $image2]);
        }
        if ($request->service_image != null){
            $image3 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->service_image->extension();
            if (strpos($setting->service_image, 'upload') != false && is_file($setting->service_image))
                unlink($setting->service_image);
            $request->service_image->move(public_path('images/upload'), $image3);
            $setting->fill(['service_image' => 'images/upload/' . $image3]);    
        }
        if ($request->service_list_image != null){
            $image4 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->service_list_image->extension();
            if (strpos($setting->service_list_image, 'upload') != false && is_file($setting->service_list_image))
                unlink($setting->service_list_image);
            $request->service_list_image->move(public_path('images/upload'), $image4);
            $setting->fill(['service_list_image' => 'images/upload/' . $image4]);    
        }

        $setting->save();

        return redirect()->route('settings.index', ['setting' => $setting]);
    }

    public function destroy(SiteSetting $setting)
    {
        //
        SiteSetting::destroy($setting->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }
}
