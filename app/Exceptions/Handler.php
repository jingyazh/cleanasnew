<?php

namespace App\Exceptions;

use App\Models\ExtraPage;
use App\Models\MainSetting;
use App\Models\OpenGraph;
use App\Models\SiteSetting;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            // if ($this->isHttpException($exception)) {
            $locale = session('locale');
            app()->setLocale($locale);
            // $locale = app()->getLocale();
            // dd($locale);
            if ($locale == null) $locale = 'en';
            $siteSetting = SiteSetting::where('locale', $locale)->first();
            // dd($siteSetting);
            $menuSetting = MainSetting::all();
            $extraPages = ExtraPage::where('locale', $locale)->get();
            if ($exception->getStatusCode() == 404) {
                $og = OpenGraph::where('locale', $locale)->where('name', '404')->first();
                return response()->view('404', ['siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'og' =>  $og], 404);
            }
            if ($exception->getStatusCode() == 410) {
                $og = OpenGraph::where('locale', $locale)->where('name', '410')->first();
                return response()->view('410', ['siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'og' =>  $og], 410);
            }
            if ($exception->getStatusCode() == 500) {
                $og = OpenGraph::where('locale', $locale)->where('name', '500')->first();
                return response()->view('500', ['siteSetting' => $siteSetting, 'menuSetting' => $menuSetting, 'extraPages' => $extraPages, 'og' =>  $og], 500);
            }
        }
        return parent::render($request, $exception);
    }
}
