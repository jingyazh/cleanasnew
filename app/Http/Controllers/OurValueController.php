<?php

namespace App\Http\Controllers;

use App\Models\OurValue;
use App\User;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class OurValueController extends Controller
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

        return view('values.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = OurValue::where('locale', $locale)->get();

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
                $url1 = route('values.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {

        $values = OurValue::where('locale', 'en')->get();
        foreach ($values as $key => $item) {
            $_values = OurValue::where('valueid', $item->valueid)->get();
            if (count($_values) == 14)
                unset($values[$key]);
        }

        return view("values.create", ['values' => $values]);
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'locale' => 'required',
            'embed' => 'required',
        ])->validate();

        if (isset($_POST['valueid']) && $_POST['valueid'] != NULL && trim($_POST['valueid']) != "") {
            $checking = OurValue::where('valueid', $request->valueid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('values.index', ['errors' => ['English version exists already.']]);
            }
            $valueid = $request->input('valueid');
            $one = OurValue::where('valueid', $valueid)->where('locale', 'en')->first();
            $type = $one->type;
        }else {
            $valueid = substr(str_shuffle(self::$characters), 0, 10);
            $type = '';
        }

        $input['valueid'] = $valueid;
        $input['type'] = $type;

        $value = OurValue::create($input);

        $image = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
        $request->image->move(public_path('images/upload'), $image);
        $value->fill(['image' => 'images/upload/' . $image]);

        $value->save();

        return redirect()->route('values.index');
    }

    public function show(OurValue $value)
    {
        //
    }

    public function edit(OurValue $value)
    {
        return view('values.edit', ['value' => $value]);
    }

    public function update(Request $request, OurValue $value)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'embed' => 'required',
        ])->validate();

        $value->fill($input);

        if ($request->image != null) {
            $image = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
            if (strpos($value->image, 'upload') != false && is_file($value->image))
                unlink($value->image);
            $request->image->move(public_path('images/upload'), $image);
            $value->fill(['image' => 'images/upload/' . $image]);
        }

        $value->save();

        return redirect()->route('values.index');
    }

    public function destroy(OurValue $value)
    {
        //
        OurValue::destroy($value->id);

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
        $ourvalues = OurValue::where('locale', $locale)->get();
        if (empty($ourvalues)) {
            $ourvalues = OurValue::where('locale', 'en')->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        // dd($locale);
        return view('our-value-to-you', ['ourvalues' => $ourvalues, 'siteSetting' => $siteSetting]);
    }
}
