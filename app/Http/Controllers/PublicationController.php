<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class PublicationController extends Controller
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

    public function index()
    {
        //... At first , check expire clients and do process.

        return view('publications.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = Review::where('locale', $locale)->where('type', 'Referred Journal Publications')->get();

        return Datatables::of($list)

            ->addColumn('title', function ($item) {
                return $item->title;
            })
            ->addColumn('locale', function ($item) {
                return Config::get('app.locales')[$item->locale];
            })
            ->addColumn('action', function ($item) {
                $url1 = route('publications.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {

        $publications = Review::where('locale', 'en')->get();
        foreach ($publications as $key => $item) {
            $_publications = Review::where('reviewid', $item->reviewid)->get();
            if (count($_publications) == 14)
                unset($publications[$key]);
        }

        return view("publications.create", ['publications' => $publications]);
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

        if (isset($_POST['reviewid']) && $_POST['reviewid'] != NULL && trim($_POST['reviewid']) != "") {
            $checking = Review::where('reviewid', $request->reviewid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('publications.index', ['errors' => ['English version exists already.']]);
            }
            $reviewid = $request->input('reviewid');
            $one = Review::where('reviewid', $reviewid)->where('locale', 'en')->first();
            $type = $one->type;
        } else {
            $reviewid = substr(str_shuffle(self::$characters), 0, 10);
            $type = 'Referred Journal Publications';
        }

        $input['reviewid'] = $reviewid;
        $input['type'] = $type;

        $publication = Review::create($input);

        return redirect()->route('publications.index');
    }

    public function show(Review $publication)
    {
        //
    }

    public function edit(Review $publication)
    {
        return view('publications.edit', ['publication' => $publication]);
    }

    public function update(Request $request, Review $publication)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'embed' => 'required',
        ])->validate();

        $publication->fill($input);

        $publication->save();

        return redirect()->route('publications.index');
    }

    public function destroy(Review $publication)
    {
        //
        Review::destroy($publication->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }
}
