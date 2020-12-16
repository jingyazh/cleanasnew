<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/lang/{locale}', function ($locale) {
    if (array_key_exists($locale, config('app.locales'))) {
        session(['locale' => $locale]);
    }
    return back()->withInput();
    
    // App::setLocale($locale);
    //
    // phpinfo();
    // return redirect()->route('home');

})->name('changelocale');

Route::view('choose-language', 'choose-language')->name('choose-language');

Route::view('how-we-compare', 'how-we-compare')->name('how_we_compare');

Route::view('what-we-clean', 'what-we-clean')->name('what_we_clean');

Route::view('our-services', 'our-services')->name('our_services');

Route::view('services/by-the-basket', 'services.by-the-basket')->name('by-the-basket');

Route::view('services/offsite-facility', 'services.offsite-facility')->name('offsite-facility');

Route::view('services/replace-your-wash-pad', 'services.replace-your-wash-pad')->name('replace-your-wash-pad');

Route::view('services/washpad-services', 'services.washpad-services')->name('washpad-services');

Route::view('how-we-do-it', 'how-we-do-it')->name('how-we-do-it');

Route::view('our-value-to-you', 'our-value-to-you')->name('our-value-to-you');

Route::view('comparisons/cleaning-cost', 'comparisons.cleaning-cost')->name('cleaning-cost');

Route::view('comparisons/esg-sustainability', 'comparisons.esg-sustainability')->name('esg-sustainability');

Route::view('comparisons/facility', 'comparisons.facility')->name('facility');

Route::view('comparisons/heat-exchanger-performance', 'comparisons.heat-exchanger-performance')->name('heat-exchanger-performance');

Route::view('comparisons/parts-cleaning', 'comparisons.parts-cleaning')->name('parts-cleaning');

Route::view('faq', 'faq')->name('faq');

Route::view('testimonials', 'testimonials')->name('testimonials');

Route::view('testimonials/case-studies', 'testimonials.case-studies')->name('case-studies');

Route::view('testimonials/feedback', 'testimonials.feedback')->name('feedback');

Route::view('testimonials/referred-journal-publications', 'testimonials.referred-journal-publications')->name('referred-journal-publications');

Route::view('esg', 'esg')->name('esg');

Route::view('esg/how-better-cleaning-can-help', 'esg.how-better-cleaning-can-help')->name('how-better-cleaning-can-help');

Route::view('about-us', 'about-us')->name('about-us');

Route::view('about-us/index', 'about-us.index')->name('about-us');

Route::view('about-us/news-and-events', 'about-us.news-and-events')->name('news-and-events');

Route::view('about-us/advisory-board', 'about-us.advisory-board')->name('advisory-board');

Route::view('about-us/advisory-board-members/don-empfield', 'about-us.advisory-board-members.don-empfield')->name('don-empfield');

Route::view('about-us/advisory-board-members/james-griffin', 'about-us.advisory-board-members.james-griffin')->name('james-griffin');

Route::view('contact', 'contact')->name('contact');

Route::view('our-intro', 'our-intro')->name('our-intro');

Route::view('privacy-policy', 'privacy-policy')->name('privacy-policy');

Route::view('terms-of-use', 'terms-of-use')->name('terms-of-use');

Route::view('posts/basket-of-parts', 'posts.basket-of-parts')->name('basket-of-parts');

Route::view('posts/book-your-free-measured-cleaning-trial-today', 'posts.book-your-free-measured-cleaning-trial-today')->name('book-your-free-measured-cleaning-trial-today');

Route::view('posts/hydroblasting-your-exchangers', 'posts.hydroblasting-your-exchangers')->name('hydroblasting-your-exchangers');

Route::view('posts/improve-your-esg-score', 'posts.improve-your-esg-score')->name('improve-your-esg-score');

Route::view('posts/more-than-just-heat-exchangers', 'posts.more-than-just-heat-exchangers')->name('more-than-just-heat-exchangers');

Route::view('posts/the-highest-performing-refineries', 'posts.the-highest-performing-refineries')->name('the-highest-performing-refineries');

Route::view('posts/ultrasonic-cleaning-webinar', 'posts.ultrasonic-cleaning-webinar')->name('ultrasonic-cleaning-webinar');

Route::view('posts/washpad-hydroblasting-vs-cleanasnew', 'posts.washpad-hydroblasting-vs-cleanasnew')->name('washpad-hydroblasting-vs-cleanasnew');

// Route::view('/{any}', '404')->name('404ErrorPage');
