<?php

namespace App\Exceptions;

use App\Traits\ResponseApi;
use Exception;
use Illuminate\Http\JsonResponse;

class FailException extends Exception
{
    use ResponseApi;

    /**
     * return fail error response
     *
     * @param $exception
     * @return JsonResponse
     */
    public function render($exception)
    {
        return $this->fail(
            $exception->getMessage(),
            $exception->getCode()
        );
    }
}
