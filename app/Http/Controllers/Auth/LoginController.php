<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Message;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    //... for login with username instead of email
    public function username()
    {
        return 'name';
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {
        $user->update([
            'lastlogintime' => Carbon::now()->toDateTimeString(),
            'lastip' => $request->getClientIp()
        ]);

        $messages = Message::all()->sortByDesc('created_at')->take(5);        
        $request->session()->put('master_messages', $messages);

    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required', 
            'password' => 'required',
            // 'captcha' => 'required|captcha',
            // 'g-recaptcha-response' => 'required|captcha',
            // new rules here
        ]);
    }    
}
