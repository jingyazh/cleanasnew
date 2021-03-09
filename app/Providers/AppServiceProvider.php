<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

use View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ResetPassword::toMailUsing(function ($notifiable, $token) {
            return (new MailMessage)
                ->from('admin@cleanasnew.com', 'Clean As New CMS Website')
                ->subject('Reset Password Notification from Clean As New')
                ->line('Hello! You are receiving this email because we received a password reset request for your account. ')
                ->action('Reset Password', url(route('password.reset', ['token' => $token, 'email' => $notifiable->getEmailForPasswordReset()], false)))
                ->line('This password reset link will expire in 60 minutes.')
                ->line('If you did not request a password reset, no further action is required.');
        });

        Schema::defaultStringLength(191);
        date_default_timezone_set('America/Toronto');

        //...
        view()->composer('*', function ($view) {
            $locale = session('locale');
            if ($locale == null)    $locale = 'en';

            $gcustomfont = "";
            if (in_array($locale, ['de', 'ru', 'es', 'es-us', 'fr'])) {
                $gcustomfont = "Lusitana:wght@400;700";
            } else if ($locale == 'cn') {
                $gcustomfont = "Noto+Serif+SC:wght@400;700";
            } else if ($locale == 'jp') {
                $gcustomfont = "Noto+Serif+JP:wght@400;700";
            } else if ($locale == 'hi-in') {
                $gcustomfont = "Noto+Sans:wght@400;700";
            } else if ($locale == 'ml') {
                $gcustomfont = "Manjari:wght@400;700";
            } else if ($locale == 'th') {
                $gcustomfont = "Kanit:wght@400;700&family=Noto+Serif:ital,wght@0,700;1,400";
            } else if ($locale == 'pa-pk') {
                $gcustomfont = "Mukta+Mahee:wght@400;700";
            } else if ($locale == 'pt-br') {
                $gcustomfont = "Lusitana:wght@400;700";
            }

            view()->share([
                'gmetadata' => DB::table('metadata')->where('locale', $locale)->get(),
                'glocales' => config('app.locales'),
                'glocale' => $locale,
                'gcustomfont' => $gcustomfont,
            ]);
        });
    }
}
