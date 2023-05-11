<?php

namespace App\Services\Landing;

use App\Exceptions\FailException;
use App\Traits\ResponseApi;
use App\Traits\UploadFile;
use Illuminate\Http\JsonResponse;

class UploadService
{
    use ResponseApi, UploadFile;

    /**
     * upload file
     *
     * @param $file
     * @return JsonResponse
     * @throws FailException
     */
    public function index($file)
    {
        $path = $this->handleFileRequest("createNewFile", $file);

        return $this->success(
            __("lang.successfullyFound"),
            compact('path')
        );
    }

    /**
     * get file
     *
     * @param $filename
     * @return mixed
     * @throws FailException
     */
    public function get($filename)
    {
        return $this->handleFileRequest("downloadFile", compact('filename'));
    }

    /**
     * delete file
     *
     * @param $path
     * @return JsonResponse
     * @throws FailException
     */
    public function delete($path)
    {
        $exist = $this->handleFileRequest("checkFileExists", $path);
        if ($exist == "no") {
            throw new FailException(
                __("lang.fileNotFound"),
                500
            );
        }

        $this->handleFileRequest("deleteFile", $path);

        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

    /**
     * check exist file
     *
     * @param $path
     * @return JsonResponse
     * @throws FailException
     */
    public function checkExist($path)
    {
        $exist = $this->handleFileRequest("checkFileExists", $path);
        if ($exist == "no") {
            throw new FailException(
                __("lang.fileNotFound"),
                404
            );
        }

        return $this->success(
            __("lang.successfullyFound"),
            compact('path')
        );
    }
}
