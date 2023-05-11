<?php

namespace App\Traits;

use App\Http\Resources\ResponseResource;

trait ResponseApi
{
    /**
     * @var array
     */
    private $response;

    /**
     * this method return api response
     *
     * @param string $message
     * @param null $data
     * @param integer $statusCode
     * @param boolean $isSuccess
     * @return \Illuminate\Http\JsonResponse
     */
    public function coreResponse($message, $statusCode, $success, $data = null)
    {
        // Send the response
        return response()->json(new ResponseResource(compact('success', 'message', 'data')), $statusCode);
    }

    /**
     * Send success response
     *
     * @param   string          $message
     * @param   array|object    $data
     * @param   integer         $statusCode
     */
    public function success($message, $data = [], $statusCode = 200)
    {
        return $this->coreResponse($message, $statusCode, true, $data);
    }

    /**
     * Send error response
     *
     * @param string $message
     * @param $response
     * @param integer $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function fail($message, $statusCode = 500)
    {
        return $this->coreResponse($message, $statusCode, false);
    }
}
