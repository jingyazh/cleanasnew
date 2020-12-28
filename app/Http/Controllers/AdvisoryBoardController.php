<?php

namespace App\Http\Controllers;

use App\Models\AdvisoryBoard;
use App\Models\SiteSetting;
use App\Models\MainSetting;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class AdvisoryBoardController extends Controller
{

    protected $user;
    static $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function __construct()
    {
        // // $this->middleware('auth');
        // $this->middleware(function ($request, $next) {
        //     $this->user = Auth::user();

        //     date_default_timezone_set('America/Toronto');        //..."Europe/London"

        //     return $next($request);
        // });
    }

    public function index()
    {
        //... At first , check expire clients and do process.

        return view('advisory_boards.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = AdvisoryBoard::where('locale', $locale)->get();

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
                $url1 = route('advisory_boards.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {

        $advisory_board = AdvisoryBoard::where('locale', 'en')->get();

        foreach ($advisory_board as $key => $item) {
            $_advisory_board = AdvisoryBoard::where('memberid', $item->memberid)->get();
            if (count($_advisory_board) == 14)
                unset($advisory_board[$key]);
        }
        // dd($advisory_board);
        // exit;
        return view("advisory_boards.create", ['advisory_board' => $advisory_board]);
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'locale' => 'required',
            'quote' => 'required',
            'embed' => 'required',
        ])->validate();

        $locale = session('locale');
        if ($locale == null) $locale = 'en';
        $input['locale'] = $locale;

        if (isset($_POST['memberid']) && $_POST['memberid'] != NULL && trim($_POST['memberid']) != "") {
            $checking = AdvisoryBoard::where('memberid', $request->memberid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('advisory_boards.index', ['errors' => ['English version exists already.']]);
            }
            $memberid = $request->input('memberid');
            $one = AdvisoryBoard::where('memberid', $memberid)->where('locale', 'en')->first();
        }else {
            $memberid = substr(str_shuffle(self::$characters), 0, 10);
        }

        $input['memberid'] = $memberid;

        $advisory_board = AdvisoryBoard::create($input);

        $image = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
        $request->image->move(public_path('images/upload'), $image);
        $advisory_board->fill(['image' => 'images/upload/' . $image]);

        $advisory_board->save();

        return redirect()->route('aboutus.index');
    }

    public function show(AdvisoryBoard $advisory_board)
    {
        //
    }

    public function edit(AdvisoryBoard $advisory_board)
    {
        return view('advisory_boards.edit', ['advisory_board' => $advisory_board]);
    }

    public function update(Request $request, AdvisoryBoard $advisory_board)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quote' => 'required',
            'embed' => 'required',
        ])->validate();

        $advisory_board->fill($input);

        if ($request->image != null) {
            $image = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
            if (strpos($advisory_board->image, 'upload') != false && is_file($advisory_board->image))
                unlink($advisory_board->image);
            $request->image->move(public_path('images/upload'), $image);
            $advisory_board->fill(['image' => 'images/upload/' . $image]);
        }

        $advisory_board->save();

        return redirect()->route('aboutus.index');
    }

    public function destroy(AdvisoryBoard $advisory_board)
    {
        //
        AdvisoryBoard::destroy($advisory_board->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }

    public function view()
    {
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $boards = AdvisoryBoard::where('locale', $locale)->get();
        if (empty($boards)) {
            $boards = AdvisoryBoard::where('locale', 'en')->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        // dd($locale);
        return view('about-us.advisory-board', ['boards' => $boards, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting]);
    }

    public function detail(Request $request)
    {
        # code...
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $board = AdvisoryBoard::where('id', $request->id)->first();
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        // dd($locale);
        return view('about-us.advisory-board-members.profile', ['board' => $board, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting]);
    }


}
