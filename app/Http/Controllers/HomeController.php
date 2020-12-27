<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Client;
use Auth;
use App\Message;
use App\Ticket;
use App\Crequest;
use App\Models\Post;
use App\Models\SiteSetting;
use App\Models\MainSetting;
use Carbon\Carbon;

class HomeController extends Controller
{

    protected $locale = "en";
    protected $siteSetting;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        // // $this->middleware('auth');
        if (session('locale') != null)
            $this->locale = session('locale');
        $this->siteSetting = SiteSetting::where('locale', $this->locale)->first();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }






    public function home()
    {
        $user =  Auth::user();
        $roleno = $user->roleno;
        $master_messages = Message::all()->sortByDesc('created_at')->take(5);

        return view('dashboard.master', [
            'master_messages' => $master_messages,
        ]);
    }

    public function tickets()
    {
        return view('dashboard.tickets');
    }
    public function unlink()
    {
        return view('dashboard.unlink');
    }
    public function boxswitch()
    {
        return view('dashboard.boxswitch');
    }
    public function expiredcustomers()
    {
        return view('dashboard.expiredcustomers');
    }
    public function test()
    {
        return view('dashboard.test');
    }
    public function logs()
    {
        return view('dashboard.logs');
    }
    public function statistics()
    {
        return view('dashboard.statistics');
    }

    public function myprofile()
    {
        return view('dashboard.myprofile');
    }

    public function customers_add()
    {
        return view('dashboard.customers_add');
    }


    ////// For Front-end //////
    public function view()
    {
        $locale = $this->locale;

        $posts = Post::where('locale', $locale)->get();
        // dd($locale);
        $menuSetting = MainSetting::all();
        return view('home', ['posts' => $posts, 'siteSetting' => $this->siteSetting, 'menuSetting' => $menuSetting]);

    }

    //... Post View
    public function postview($id) {
        $post = Post::where('id', $id)->first();
        // dd($post);
        return view('postview', ['post' => $post, 'siteSetting' => $this->siteSetting]);
    }

}
