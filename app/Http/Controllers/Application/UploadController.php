<?php

namespace App\Http\Controllers\Application;

use App\Http\Requests\PathRequest;
use App\Services\Application\UploadService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * @group File
 *
 * API endpoints for managing panel
 */

class UploadController extends Controller
{

    /**
     * UploadController constructor.
     *
     * @param UploadService $uploadService
     */
    public function __construct(protected UploadService $uploadService)
    {
    }

    /**
     * get file
     *
     * show file if exist, else return error
     *
     * @bodyParam path string required The given path from upload api.Example: blogs/NhJhPtXuq40NyWPOxiOe9N7zHwOvLV0DQwNVSPdm.jpg
     * @responseApiResource App\Http\Resources\ResponseResource
     * @param PathRequest $pathRequest
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @return JsonResponse
     * @throws \App\Exceptions\FailException
     */
    public function get(PathRequest $pathRequest)
    {
        $data = $pathRequest->only([
            "path"
        ]);
        return $this->uploadService->get($data["path"]);
    }
}
