<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;


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
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     *
     * @throws \Throwable
     */
    public function handleApiExceptions($request, $exception)
    {
        if($exception instanceof ModelNotFoundException)
        {
            return response()->json(['error' => 'Model Not Found'], 404);
        }
        Log::warning("[Handler.handleApiExceptions] API Exception type '" .
        get_class($exception) . "' not handled.");
        return parent::render($request, $exception);
    }
        
    public function render($request, Throwable $exception)
        {
        if($request->expectsJson())
        {
        return $this->handleApiExceptions($request, $exception);
        }
        return parent::render($request, $exception);
        }
}
