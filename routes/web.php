<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@view')->name('landing');

Route::get('/posts/{id}', 'HomeController@postview')->name('postview');

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

Route::get('how-we-compare', 'ComparisonController@view')->name('how-we-clean');

// Route::view('what-we-clean', 'what-we-clean')->name('what_we_clean');
Route::get('what-we-clean', 'WhatWeCleanController@view')->name('what-we-clean');

// Route::view('our-services', 'our-services')->name('our_services');
Route::get('our-services', 'ServiceController@view')->name('our-services');

// Route::view('services/by-the-basket', 'services.by-the-basket')->name('by-the-basket');

// Route::view('services/offsite-facility', 'services.offsite-facility')->name('offsite-facility');

// Route::view('services/replace-your-wash-pad', 'services.replace-your-wash-pad')->name('replace-your-wash-pad');

// Route::view('services/washpad-services', 'services.washpad-services')->name('washpad-services');

// get the service detail page
Route::get('services/{id}', 'ServiceController@detail')->name('serviceDetail');

/// ---- how we do it ---- ///
// Route::view('how-we-do-it', 'how-we-do-it')->name('how-we-do-it');
Route::get('how-we-do-it', 'TodoController@view')->name('how-we-do-it');
/// ----- ---///

// Route::view('our-value-to-you', 'our-value-to-you')->name('our-value-to-you');
Route::get('our-value-to-you', 'OurValueController@view')->name('our-value-to-you');

Route::get('comparisons/{id}', 'ComparisonController@detail')->name('comparisonDetail');

// Route::view('faq', 'faq')->name('faq');
Route::get('faq', 'FaqController@view')->name('faq');

// Route::view('testimonials', 'testimonials')->name('testimonials');
Route::get('testimonials', 'testimonialController@view')->name('testimonials');

Route::get('testimonials/{id}', 'testimonialController@detail')->name('testimonialsDetail'); //////////////////// in here working.
// Route::view('testimonials/case-studies', 'testimonials.case-studies')->name('case-studies');

// Route::view('testimonials/feedback', 'testimonials.feedback')->name('feedback');

// Route::view('testimonials/referred-journal-publications', 'testimonials.referred-journal-publications')->name('referred-journal-publications');

// Route::view('esg', 'esg')->name('esg');
Route::get('esg', 'ESGController@view')->name('esg');

Route::get('esg/how-better-cleaning-can-help', 'ESGController@esgHelp')->name('esgHelp');

// Route::view('esg/how-better-cleaning-can-help', 'esg.how-better-cleaning-can-help')->name('how-better-cleaning-can-help');

// Route::view('about-us', 'about-us')->name('about-us');
Route::get('about-us', 'AboutUsController@view')->name('about-us');

// Route::view('about-us/index', 'about-us.index')->name('about-us');
Route::get('about-us/index', 'AboutCompanyController@view')->name('about-us-index');

// Route::view('about-us/news-and-events', 'about-us.news-and-events')->name('news-and-events');
Route::get('about-us/news-and-events', 'NewsEventController@view')->name('news-and-events');

// Route::view('about-us/advisory-board', 'about-us.advisory-board')->name('advisory-board');
Route::get('about-us/advisory-board', 'AdvisoryBoardController@view')->name('advisory-board');
Route::get('about-us/advisory-board/{id}', 'AdvisoryBoardController@detail')->name('advisory-board-detail');

// Route::view('about-us/advisory-board-members/don-empfield', 'about-us.advisory-board-members.don-empfield')->name('don-empfield');

// Route::view('about-us/advisory-board-members/james-griffin', 'about-us.advisory-board-members.james-griffin')->name('james-griffin');

// Route::view('contact', 'contact')->name('contact');
Route::get('contact', 'ContactController@view')->name('contact');

Route::view('our-intro', 'our-intro')->name('our-intro');

// Route::view('privacy-policy', 'privacy-policy')->name('privacy-policy');
Route::get('privacy-policy', 'ContactController@privacy')->name('privacy-policy');

// Route::view('terms-of-use', 'terms-of-use')->name('terms-of-use');
Route::get('terms-of-use', 'ContactController@terms')->name('terms-of-use');

Route::view('posts/basket-of-parts', 'posts.basket-of-parts')->name('basket-of-parts');

Route::view('posts/book-your-free-measured-cleaning-trial-today', 'posts.book-your-free-measured-cleaning-trial-today')->name('book-your-free-measured-cleaning-trial-today');

Route::view('posts/hydroblasting-your-exchangers', 'posts.hydroblasting-your-exchangers')->name('hydroblasting-your-exchangers');

Route::view('posts/improve-your-esg-score', 'posts.improve-your-esg-score')->name('improve-your-esg-score');

Route::view('posts/more-than-just-heat-exchangers', 'posts.more-than-just-heat-exchangers')->name('more-than-just-heat-exchangers');

Route::view('posts/the-highest-performing-refineries', 'posts.the-highest-performing-refineries')->name('the-highest-performing-refineries');

Route::view('posts/ultrasonic-cleaning-webinar', 'posts.ultrasonic-cleaning-webinar')->name('ultrasonic-cleaning-webinar');

Route::view('posts/washpad-hydroblasting-vs-cleanasnew', 'posts.washpad-hydroblasting-vs-cleanasnew')->name('washpad-hydroblasting-vs-cleanasnew');

// Route::view('/{any}', '404')->name('404ErrorPage');



Auth::routes();


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/dashboard', 'HomeController@home')->name('home');

    //... ========= For Comparison ========
    Route::get('/admin/comparisons/comparisons_data', 'ComparisonController@comparisons_data')->name('comparisons.comparisons_data');
    Route::resource('/admin/comparisons', 'ComparisonController');

    //... ========= For Home Page ========
    Route::get('/admin/posts/data', 'PostController@data')->name('posts.data');
    Route::get('/admin/posts/pageSetting', 'PostController@pageSetting')->name('posts.pageSetting');
    Route::resource('/admin/posts', 'PostController');

    //... ========= For Cleans ========
    Route::get('/admin/cleans/data', 'WhatWeCleanController@data')->name('cleans.data');
    Route::resource('/admin/cleans', 'WhatWeCleanController');

    //... ========= For Services ========
    Route::get('/admin/services/data', 'ServiceController@data')->name('services.data');
    Route::resource('/admin/services', 'ServiceController');

    //... ========= For Todos ========
    Route::get('/admin/todos/data', 'TodoController@data')->name('todos.data');
    Route::resource('/admin/todos', 'TodoController');

    //... ========= For Values ========
    Route::get('/admin/values/data', 'OurValueController@data')->name('values.data');
    Route::resource('/admin/values', 'OurValueController');

    //... ========= For Faqs ========
    Route::get('/admin/faqs/data', 'FaqController@data')->name('faqs.data');
    Route::resource('/admin/faqs', 'FaqController');

    //... ========= For Faqs ========
    Route::get('/admin/testimonials/data', 'TestimonialController@data')->name('testimonials.data');
    Route::resource('/admin/testimonials', 'TestimonialController');

    //... ========= For Case Studies ========
    Route::get('/admin/casestudies/data', 'StudyController@data')->name('casestudies.data');
    Route::resource('/admin/casestudies', 'StudyController');

    //... ========= For Feedback ========
    Route::get('/admin/feedbacks/data', 'FeedbackController@data')->name('feedbacks.data');
    Route::resource('/admin/feedbacks', 'FeedbackController');

    //... ========= For Publications ========
    Route::get('/admin/publications/data', 'PublicationController@data')->name('publications.data');
    Route::resource('/admin/publications', 'PublicationController');

    //... ========= For ESG ========
    Route::get('/admin/esgs/data', 'ESGController@data')->name('esgs.data');
    Route::resource('/admin/esgs', 'ESGController');

    //... ========= For About US ========
    Route::get('/admin/aboutus/data', 'AboutUsController@data')->name('aboutus.data');
    Route::resource('/admin/aboutus', 'AboutUsController');

    //... ========= For About Company ========
    Route::get('/admin/aboutcompany/data', 'AboutCompanyController@data')->name('aboutcompany.data');
    Route::resource('/admin/aboutcompany', 'AboutCompanyController');

    //... ========= For Advisory Boards ========
    Route::get('/admin/advisory_boards/data', 'AdvisoryBoardController@data')->name('advisory_boards.data');
    Route::resource('/admin/advisory_boards', 'AdvisoryBoardController');

    //... ========= For News and Events ========
    Route::get('/admin/news_events/data', 'NewsEventController@data')->name('news_events.data');
    Route::resource('/admin/news_events', 'NewsEventController');

    //... ========= For Contacts ========
    Route::get('/admin/contacts/data', 'ContactController@data')->name('contacts.data');
    Route::resource('/admin/contacts', 'ContactController');

    //... ========= For General Settings ========
    Route::get('/admin/settings/data', 'SiteSettingController@data')->name('settings.data');
    Route::resource('/admin/settings', 'SiteSettingController');
    Route::get('/admin/error', 'SiteSettingController@error')->name('settings.error'); // For Error Pages
    Route::post('/admin/updateErrorpage', 'SiteSettingController@updateErrorpage')->name('settings.updateErrorpage'); // For Error Pages

    //... ========= For Metadata management ========
    Route::get('/admin/metadata/data', 'MetadataController@data')->name('metadata.data');
    Route::resource('/admin/metadata', 'MetadataController');

    Route::post('/admin/pageVisibleSetting', 'MainSettingController@pageVisibleSetting')->name('mainSetting.pageVisibleSetting');

    //... ========= For Reseller ========
    Route::get('/admin/users/users_data', 'UsersController@users_data')->name('users.users_data');
    Route::post('/admin/users/change_status', 'UsersController@change_status')->name('users.change_status');
    Route::resource('/admin/users', 'UsersController');

    Route::resource('/admin/messages', 'MessageController')->only([
        'index', 'store', 'destroy'
    ]);


    Route::get('/admin/myprofile', 'HomeController@myprofile')->name('myprofile');
    Route::put('/admin/masterupdate', 'UsersController@masterupdate')->name('users.masterupdate');
});

Route::get('/admin', function () {
    return redirect()->route('home');
});
Route::get('/home', function () {
    return redirect()->route('home');
});
Route::get('/admin/{any}', function () {
    return redirect()->route('home');
});
