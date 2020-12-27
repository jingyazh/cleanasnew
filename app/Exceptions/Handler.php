<?php

namespace App\Exceptions;

use App\Models\MainSetting;
use App\Models\SiteSetting;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

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
        if ($this->isHttpException($exception)) {
            $locale = session('locale');
            if ($locale == null) $locale = 'en';
            $siteSetting = SiteSetting::where('locale', $locale)->first();
            $menuSetting = MainSetting::all();
            if ($exception->getStatusCode() == 404) {
                return response()->view('404', ['siteSetting' => $siteSetting, 'menuSetting' => $menuSetting], 404);
            }
            if ($exception->getStatusCode() == 410) {
                return response()->view('410', ['siteSetting' => $siteSetting, 'menuSetting' => $menuSetting], 410);
            }
            if ($exception->getStatusCode() == 500) {
                return response()->view('500', ['siteSetting' => $siteSetting, 'menuSetting' => $menuSetting], 500);
            }
        }
        return parent::render($request, $exception);
    }
}
