<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class NewsEventController extends Controller
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

        return view('news_events.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = NewsEvent::where('locale', $locale)->get();

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
                $url1 = route('news_events.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {

        $news_events = NewsEvent::where('locale', 'en')->get();
        foreach ($news_events as $key => $item) {
            $_news_events = NewsEvent::where('articleid', $item->articleid)->get();
            if (count($_news_events) == 14)
                unset($news_events[$key]);
        }

        return view("news_events.create", ['news_events' => $news_events]);
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

        if (isset($_POST['articleid']) && $_POST['articleid'] != NULL && trim($_POST['articleid']) != "") {
            $checking = NewsEvent::where('articleid', $request->articleid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('news_events.index', ['errors' => ['English version exists already.']]);
            }
            $articleid = $request->input('articleid');
            $one = NewsEvent::where('articleid', $articleid)->where('locale', 'en')->first();
            $type = $one->type;
        } else {
            $articleid = substr(str_shuffle(self::$characters), 0, 10);
            $type = '';
        }

        $input['articleid'] = $articleid;
        $input['type'] = $type;

        $news_event = NewsEvent::create($input);

        return redirect()->route('news_events.index');
    }

    public function show(NewsEvent $news_event)
    {
        //
    }

    public function edit(NewsEvent $news_event)
    {
        return view('news_events.edit', ['news_event' => $news_event]);
    }

    public function update(Request $request, NewsEvent $news_event)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'embed' => 'required',
        ])->validate();

        $news_event->fill($input);

        $news_event->save();

        return redirect()->route('news_events.index');
    }

    public function destroy(NewsEvent $news_event)
    {
        //
        NewsEvent::destroy($news_event->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }
}
