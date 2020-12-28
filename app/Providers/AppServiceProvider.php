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

        //...
        view()->composer('*', function ($view) 
        {
            $locale = session('locale');
            if ($locale == null)    $locale = 'en';

            $gcustomfont = "";
            if (in_array($locale, ['de', 'ru', 'es', 'es-us', 'fr'])) {
                $gcustomfont = "Lusitana:wght@400;700";
            } else if($locale == 'cn') {
                $gcustomfont = "Noto+Serif+SC:wght@400;700";
            } else if($locale == 'jp') {
                $gcustomfont = "Noto+Serif+JP:wght@400;700";
            } else if($locale == 'hi-in') {
                $gcustomfont = "Noto+Sans:wght@400;700";
            } else if($locale == 'ml') {
                $gcustomfont = "Manjari:wght@400;700";
            } else if($locale == 'th') {
                $gcustomfont = "Kanit:wght@400;700&family=Noto+Serif:ital,wght@0,700;1,400";
            } else if($locale == 'pa-pk') {
                $gcustomfont = "Mukta+Mahee:wght@400;700";
            } else if($locale == 'pt-br') {
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
