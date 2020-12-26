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
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // // $this->middleware('auth');
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

        $customeractive_count = ($roleno == User::ROLE_MASTER) ? Client::where('is_disabled', 0)->count() :
            Client::where('resellerid', $user->id)->where('is_disabled', 0)->count();

        $orderinprogress_count = ($roleno == User::ROLE_MASTER) ? Ticket::where('status', 0)->count()
            : Ticket::where('resellerid', $user->id)->where('status', 0)->count();

        $requestinprogress_count = ($roleno == User::ROLE_MASTER) ? Crequest::where('status', 0)->count()
            : Crequest::where('resellerid', $user->id)->where('status', 0)->count();

        // $customercancel_count = ($roleno == User::ROLE_MASTER) ? Client::where('is_disabled', 1)->count() :
        //     Client::where('resellerid', $user->id)->where('is_disabled', 1)->count();
        $customercancel_count = ($roleno == User::ROLE_MASTER) ?  Ticket::where('status', 2)->count()
            : Ticket::where('resellerid', $user->id)->where('status', 2)->count();


        $master_messages = Message::all()->sortByDesc('created_at')->take(5);




        return view('dashboard.master', [
            'master_messages' => $master_messages,
            'customeractive_count' => $customeractive_count,
            'orderinprogress_count' => $orderinprogress_count,
            'requestinprogress_count' => $requestinprogress_count,
            'customercancel_count' => $customercancel_count
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
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $posts = Post::where('locale', $locale)->get();
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        // dd($locale);
        return view('home', ['posts' => $posts, 'siteSetting' => $siteSetting]);
    }
}
