<?php

namespace App\Http\Controllers;

use App\Models\Metadata;
use App\Models\SiteSetting;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;
use PhpOffice\PhpSpreadsheet\Writer\Ods\Meta;

class MetadataController extends Controller
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
        $this->middleware('auth');
        $locale = session('locale');
        if ($locale != null)
            $locale = 'en';
        $metadata = Metadata::where('locale', $locale)->get();
        return view('metadata.index', ['listtype' => 'mine', 'metadata' => $metadata]);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        // dd();
        $locale = $request->locale;
        $list = Metadata::where('locale', $locale)->get();

        // dd($locale);
        return Datatables::of($list)
            ->addColumn('locale', function ($item) {
                return Config::get('app.locales')[$item->locale];
            })
            ->addColumn('action', function ($item) {
                $url1 = route('metadata.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {

        $metadata = SiteSetting::where('locale', 'en')->get();
        foreach ($metadata as $key => $item) {
            $_metadata = SiteSetting::where('id', $item->id)->get();
            if (count($_metadata) == 14)
                unset($metadata[$key]);
        }
        return view("metadata.create", ['metadata' => $metadata]);
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'page_name' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'locale' => 'required',
        ])->validate();

        $metadata = Metadata::where('locale', $request->locale)->where('page_name', $request->page_name)->get();
        if (count($metadata) != 0) {
            return back();
        }
        $metadata = Metadata::create($input);

        return redirect()->route('metadata.index');
    }

    public function show(Metadata $metadata)
    {
        //
    }

    public function edit(Request $request, Metadata $metadata)
    {
        // dd($metadata);
        return view('metadata.edit', ['metadata' => $metadata]);
    }

    public function update(Request $request, Metadata $metadata)
    {
        //
        $input = $request->all();

        if ($request->name == '' && $request->content == '' && $request->property == '') {
            return view('metadata.edit', ['message' => 'Please fill two fields at least.', 'metadata' => $metadata]);
        }
        $metadata->fill($input);

        $metadata->save();

        return redirect()->route('metadata.index');
    }

    public function destroy(Metadata $metadata)
    {
        //
        Metadata::destroy($metadata->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }
}
