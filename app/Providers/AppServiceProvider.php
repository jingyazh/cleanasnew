<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        date_default_timezone_set('America/Toronto');

        $locale = session('locale');
        if ($locale == null)    $locale = 'en';

        $metadata = DB::table('metadata')->where('locale', $locale)->get();

        view()->share('metadata', $metadata);

    }
}
