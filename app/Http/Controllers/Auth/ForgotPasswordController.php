<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function __invoke(Request $request)
    {
        $this->validateEmail($request);
        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );
        // return ['received' => true];
        return $response == Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Reset link sent to your email.', 'success' => true], 201)
            : response()->json(['message' => 'Unable to send reset link', 'success' => false], 401);
    }

    public function sendNotification(Request $request)
    {
        $this->validateEmail($request);
        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );
        // return ['received' => true];
        return $response == Password::RESET_LINK_SENT
            ? view('auth.passwords.email', ['success' => true, 'message' => 'Your password reset instruction will be sent to your email address. If you cannot see the email in your inbox, please check your Junk Mail.'])
            :  view('auth.passwords.email', ['success' => false, 'message' => 'Unable to send reset link due to connection issue. Please try again some hours later.']);
    }
}
