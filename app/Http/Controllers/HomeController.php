<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Client;
use Auth;
use App\Message;
use App\Ticket;
use App\Crequest;
use App\Models\ExtraPage;
use App\Models\Post;
use App\Models\SiteSetting;
use App\Models\MainSetting;
use App\Models\OpenGraph;
use Carbon\Carbon;
use Session;

class HomeController extends Controller
{

    protected $locale = "en";
    protected $siteSetting;
    protected $menuSetting;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        // // $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            
            $this->locale = Session::get('locale', 'en');
            $this->siteSetting = SiteSetting::where('locale', $this->locale)->first();
            $this->menuSetting = MainSetting::all();
            
            return $next($request);
        });

        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('dashboard');
        return redirect()->route('myprofile');
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
        $posts = Post::where('locale', $this->locale)->get();
        $extraPages = ExtraPage::where('locale', $this->locale)->get();
        $og = OpenGraph::where('locale', $this->locale)->where('name', 'home')->first();

        
        return view('home', ['posts' => $posts, 'siteSetting' => $this->siteSetting, 'menuSetting' => $this->menuSetting, 'extraPages' => $extraPages, 'og' => $og]);

    }

    //... Post View
    public function postview($id) {
        $extraPages = ExtraPage::where('locale', $this->locale)->get();
        $post = Post::where('postid', $id)->where('locale', $this->locale)->first();
        if ($post == null){
            $og = OpenGraph::where('locale', $this->locale)->where('name', '404')->first();
            return response()->view('404', ['siteSetting' => $this->siteSetting, 'menuSetting' => $this->menuSetting, 'extraPages' => $extraPages, 'og' =>  $og], 404);
        }

        return view('postview', ['post' => $post, 'siteSetting' => $this->siteSetting, 'menuSetting' => $this->menuSetting, 'extraPages' => $extraPages]);
    }
    //... Post View
    public function chooselanguage() {
        $extraPages = ExtraPage::where('locale', $this->locale)->get();
        return view('choose-language', ['siteSetting' => $this->siteSetting, 'menuSetting' => $this->menuSetting, 'extraPages' => $extraPages]);
    } 
}
