<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SiteSetting;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class ServiceController extends Controller
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

        return view('services.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = Service::where('locale', $locale)->get();

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
                $url1 = route('services.edit', $item->id);
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

        $services = Service::where('locale', 'en')->get();
        foreach ($services as $key => $item) {
            $_services = Service::where('serviceid', $item->serviceid)->get();
            if (count($_services) == 14)
                unset($services[$key]);
        }

        return view("services.create", ['services' => $services]);
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

        if (isset($_POST['serviceid']) && $_POST['serviceid'] != NULL && trim($_POST['serviceid']) != "") {
            $checking = Service::where('serviceid', $request->serviceid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('services.index', ['errors' => ['English version exists already.']]);
            }
            $serviceid = $request->input('serviceid');
        }else {
            $serviceid = substr(str_shuffle(self::$characters), 0, 10);
        }

        $input['serviceid'] = $serviceid;
      
        
        $service = Service::create($input); 

        $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_1->extension();
        if (strpos($service->image_landing_1, 'upload') != false && is_file($service->image_landing_1))
            unlink($service->image_landing_1);
        $request->image_landing_1->move(public_path('images/upload'), $image1);
        $service->fill(['image_landing_1' => 'images/upload/' . $image1]);

        $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_2->extension();
        if (strpos($service->image_landing_2, 'upload') != false && is_file($service->image_landing_2))
            unlink($service->image_landing_2);
        $request->image_landing_2->move(public_path('images/upload'), $image2);
        $service->fill(['image_landing_2' => 'images/upload/' . $image2]);

        $service->save();

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image_landing_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_landing_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'embed' => 'required',
        ])->validate();

        $service->fill($input);

        if ($request->image_landing_1 != null) {
            $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_1->extension();
            if (strpos($service->image_landing_1, 'upload') != false && is_file($service->image_landing_1))
                unlink($service->image_landing_1);
            $request->image_landing_1->move(public_path('images/upload'), $image1);
            $service->fill(['image_landing_1' => 'images/upload/' . $image1]);
        }

        if ($request->image_landing_2 != null) {
            $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing_2->extension();
            if (strpos($service->image_landing_2, 'upload') != false && is_file($service->image_landing_2))
                unlink($service->image_landing_2);
            $request->image_landing_2->move(public_path('images/upload'), $image2);
            $service->fill(['image_landing_2' => 'images/upload/' . $image2]);
        }

        $service->save();

        return redirect()->route('services.index');
    }

    public function view(Request $request)
    {
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $services = Service::where('locale', $locale)->get();
        if (empty($services)) {
            $services = Service::where('locale', 'en')->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        // dd($locale);
        return view('our-services', ['services' => $services, 'siteSetting' => $siteSetting]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
        Service::destroy($service->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }

    public function detail(Request $request)
    {
        $service = Service::where('id', $request->id)->first();
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        return view('services.detail', ['service' => $service, 'siteSetting' => $siteSetting]);
        # code...
    }
}
