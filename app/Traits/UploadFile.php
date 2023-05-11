<?php

namespace App\Traits;

use App\Exceptions\FailException;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadFile
{

    /**
     * handle files request
     *
     * @param $data
     * @param $method
     * @return string
     */
    public function handleFileRequest($method, $data = null)
    {
        $response = $this->$method($data);
        if (!$response) {
            throw new FailException(
                __("lang.errorInUploadImage"),
                "500"
            );
        }
        return $response;
    }

    /**
     * create new file.
     *
     * @param $data
     * @return bool
     */
    private function createNewFile($data)
    {
        $file = $data["file"];
        $path = Storage::disk('s3')->put($data["path"], $file);
        return $path ?? null;
    }

    /**
     * remove old file & upload new file.
     *
     * @param $data
     * @return bool
     */
    private function updateFile($data)
    {
        $oldFile = $data["oldFile"];
        $data = $data["data"];

        #remove old file
        if (!empty($oldFile)) {
            $deleted = $this->deleteFile($oldFile);

            if (!$deleted) {
                return $deleted;
            }
        }
        #end

        #upload new file
        return $this->createNewFile($data);
    }

    /**
     * check file exist
     *
     * @param $path
     * @return bool
     */
    private function checkFileExists($path)
    {
        if (is_array($path)) {
            foreach ($path as $item) {
                $exist = Storage::disk('s3')->exists($item);
                if (!$exist) return "no";
            }
        }
        return Storage::disk('s3')->exists($path) ? "yes" : "no";
    }

    /**
     * get file size
     *
     * @param $data
     * @return int
     */
    private  function fileSize($data)
    {
        $filename = $data["filename"];
        return Storage::disk('s3')->size($filename);
    }

    /**
     * read file
     *
     * @param $data
     * @return string
     * @throws FileNotFoundException
     */
    private function readFile($data)
    {
        $filename = $data["filename"];
        return Storage::disk('s3')->get($filename);
    }

    /**
     * download file
     *
     * @param $data
     * @return string
     * @throws FileNotFoundException
     */
    private function downloadFile($data)
    {
        $filename = $data["filename"];
        return Storage::disk('s3')->download($filename);
    }

    /**
     * read all files
     *
     * @return array
     */
    private function getFiles()
    {
        return Storage::disk('s3')->files('/');
    }

    /**
     * delete file
     *
     * @param $path
     * @return bool
     */
    private function deleteFile($path)
    {
        return Storage::disk('s3')->delete($path);
    }
}
