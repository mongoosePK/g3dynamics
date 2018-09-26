<?php

namespace App\Exceptions;

use Exception;
use Log;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
    public function report(Exception $exception)
    {
        //parent::report($exception);
        $this->logAnException($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    public static function logAnException(Exception $exception) {
        $exceptionFormat = "\n********************\nG3DYNAMICS-EXCEPTION \nMESSAGE:: %s \nFILE:: %s \nLINE::%s \n********************\n";

        Log::error(
            sprintf($exceptionFormat,
                // some exceptions don't come with a message
                !empty(trim($exception->getMessage()))
                    ? $exception->getMessage()
                    : get_class($exception),
                $exception->getFile(),
                $exception->getLine()
            )
        );
    }
}
