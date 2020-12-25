<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class PostController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //... At first , check expire clients and do process.

        return view('posts.index', ['listtype' => 'mine']);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = Post::where('locale', $locale)->orderBy('created_at', 'asc')->get();

        return Datatables::of($list)

            ->addColumn('title', function ($item) {
                return $item->title;
            })
            ->addColumn('image1', function ($item) {
                return " <a href='/{$item->image_landing}' target='_blank'> " . "<img style='height: 50px;' src='/{$item->image_landing}' />" . " </a> ";
            })
            ->addColumn('image2', function ($item) {
                if ($item->image_article != null && $item->image_article != '')
                    return " <a href='/{$item->image_article}' target='_blank'> " . "<img style='height: 50px;' src='/{$item->image_article}' />" . " </a> ";
                else
                    return '';
            })
            ->addColumn('locale', function ($item) {
                return Config::get('app.locales')[$item->locale];
            })
            ->addColumn('action', function ($item) {
                $url1 = route('posts.edit', $item->id);
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

        $posts = Post::where('locale', 'en')->get();
        foreach ($posts as $key => $item) {
            $_posts = Post::where('postid', $item->postid)->get();
            if (count($_posts) == 14)
                unset($posts[$key]);
        }

        return view("posts.create", ['posts' => $posts]);
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
            'image_landing' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image_article' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'embed' => 'required',
            'locale' => 'required'
        ])->validate();

        if (isset($_POST['postid']) && $_POST['postid'] != NULL && trim($_POST['postid']) != "") {
            $checking = Post::where('postid', $request->postid)->where('locale', $request->locale)->get();
            if (count($checking) > 0) {
                return redirect()->route('posts.index', ['errors' => ['English version exists already.']]);
            }
            $postid = $request->input('postid');
        } else {
            $postid = substr(str_shuffle(self::$characters), 0, 10);
        }

        $input['postid'] = $postid;


        $post = Post::create($input);

        $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing->extension();
        if (strpos($post->image_landing, 'upload') != false && is_file($post->image_landing))
            unlink($post->image_landing);
        $request->image_landing->move(public_path('images/upload'), $image1);
        $post->fill(['image_landing' => 'images/upload/' . $image1]);
        $image2 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_article->extension();
        if (strpos($post->image_article, 'upload') != false && is_file($post->image_article))
            unlink($post->image_article);
        $request->image_article->move(public_path('images/upload'), $image2);
        $post->fill(['image_article' => 'images/upload/' . $image2]);

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'title' => 'required',
            'image_landing' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'image_article' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'embed' => 'required',
        ])->validate();

        $post->fill($input);

        if ($request->image_landing != null) {
            $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_landing->extension();
            if (strpos($post->image_landing, 'upload') != false && is_file($post->image_landing))
                unlink($post->image_landing);
            $request->image_landing->move(public_path('images/upload'), $image1);
            $post->fill(['image_landing' => 'images/upload/' . $image1]);
        }
        if ($request->image_article != null) {
            $image1 = substr(str_shuffle(self::$characters), 0, 10) . '.' . $request->image_article->extension();
            if (strpos($post->image_article, 'upload') != false && is_file($post->image_article))
                unlink($post->image_article);
            $request->image_article->move(public_path('images/upload'), $image1);
            $post->fill(['image_article' => 'images/upload/' . $image1]);
        }

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        Post::destroy($post->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }
}
