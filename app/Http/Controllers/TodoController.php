<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Models\MainSetting;
use App\Models\Todo;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class TodoController extends Controller
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
        return view('todos.index', ['listtype' => 'mine', 'setting' => $setting]);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = Todo::where('locale', $locale)->get();

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
                $url1 = route('todos.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {

        $todos = Todo::where('locale', 'en')->get();
        foreach ($todos as $key => $item) {
            $_todos = Todo::where('todoid', $item->todoid)->get();
            if (count($_todos) == 14)
                unset($todos[$key]);
        }

        return view("todos.create", ['todos' => $todos]);
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

        if (isset($_POST['todoid']) && $_POST['todoid'] != NULL && trim($_POST['todoid']) != "") {
            $checking = Todo::where('todoid', $request->todoid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('todos.index', ['errors' => ['English version exists already.']]);
            }
            $todoid = $request->input('todoid');
            $one = Todo::where('todoid', $todoid)->where('locale', 'en')->first();
            $type = $one->type;
        }else {
            $todoid = substr(str_shuffle(self::$characters), 0, 10);
            $type = '';
        }

        $input['todoid'] = $todoid;
        $input['type'] = $type;

        $todo = Todo::create($input);

        $image = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
        $request->image->move(public_path('images/upload'), $image);
        $todo->fill(['image' => 'images/upload/' . $image]);

        $todo->save();

        return redirect()->route('todos.index');
    }

    public function show(Todo $todo)
    {
        //
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', ['todo' => $todo]);
    }

    public function update(Request $request, Todo $todo)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'embed' => 'required',
        ])->validate();

        $todo->fill($input);

        if ($request->image != null) {
            $image = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image->extension();
            if (strpos($todo->image, 'upload') != false && is_file($todo->image))
                unlink($todo->image);
            $request->image->move(public_path('images/upload'), $image);
            $todo->fill(['image' => 'images/upload/' . $image]);
        }

        $todo->save();

        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo)
    {
        //
        Todo::destroy($todo->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }


    public function view(Request $request)
    {
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $todos = Todo::where('locale', $locale)->get();
        if (empty($todos)) {
            $todos = Todo::where('locale', 'en')->get();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        $menuSetting = MainSetting::all();
        // dd($locale);
        return view('how-we-do-it', ['todos' => $todos, 'siteSetting' => $siteSetting, 'menuSetting' => $menuSetting]);
    }
}
