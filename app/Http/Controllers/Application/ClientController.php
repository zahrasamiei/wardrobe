<?php

namespace App\Http\Controllers\Application;

use App\Exceptions\FailException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Client\AnatomyRequest;
use App\Http\Requests\Application\Client\AvatarRequest;
use App\Http\Requests\Application\Client\ChangePasswordRequest;
use App\Http\Requests\Application\Client\UpdateRequest;
use App\Http\Requests\Application\Client\UploadRequest;
use App\Services\Application\ClientService;
use Illuminate\Http\JsonResponse;

/**
 * @group Profile
 *
 * API endpoints for managing panel
 */

class ClientController extends Controller
{

    /**
     * ClientController constructor.
     *
     * @param ClientService $clientService
     */
    public function __construct(
        protected ClientService $clientService
    )
    {

    }

    /**
     * update anatomy
     *
     * update anatomy for loged in client
     *
     * @bodyParam weight int required. Example: 60
     * @bodyParam height int required. Example: 170
     * @bodyParam body_shape_id int The id from body_shapes.
     * @bodyParam gender_id int required The id from genders. Example: 1
     * @bodyParam chest_size int required. Example: 50
     * @bodyParam waist_size int required. Example: 20
     * @bodyParam hip_size int required. Example: 30
     * @bodyParam collar_size int required. Example: 50
     * @bodyParam shoe_size int required. Example: 38
     * @bodyParam age int. Example: 23
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":1,"name":"zahra","email":"zahra@gmail.com","avatar":"clients/image.png", "gender": "", "anatomy": []}}
     * @response 422 {"success":false,"message":"Current Password Is Not Correct!"}
     * @param AnatomyRequest $anatomyRequest
     * @return JsonResponse
     */
    public function updateAnatomy(AnatomyRequest $anatomyRequest)
    {
        $data = $anatomyRequest->only([
            "weight",
            "height",
            "body_shape_id",
            "gender_id",
            "chest_size",
            "waist_size",
            "hip_size",
            "collar_size",
            "shoe_size",
            "age",
        ]);

        return $this->clientService->updateAnatomy($data);
    }

    /**
     * change password
     *
     * change password for loged in client
     *
     * @bodyParam current_password string required. Example: password
     * @bodyParam password string required. Example: password1
     * @bodyParam password_confirmation string required. Example: password1
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":1,"name":"zahra","email":"zahra@gmail.com","avatar":"clients/image.png", "gender": "", "anatomy": []}}
     * @response 422 {"success":false,"message":"Current Password Is Not Correct!"}
     * @param ChangePasswordRequest $changePasswordRequest
     * @return JsonResponse
     * @throws FailException
     */
    public function changePassword(ChangePasswordRequest $changePasswordRequest)
    {
        $data = $changePasswordRequest->only([
            "current_password",
            "password",
        ]);
        return $this->clientService->changePassword($data);
    }

    /**
     * show
     *
     * Display the specified resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @return JsonResponse
     */
    public function show()
    {
        return $this->clientService->show();
    }

    /**
     * update
     *
     * Update the specified resource in storage.
     *
     * @bodyParam name string. Example: zahra
     * @bodyParam email string. Example: zahra@gmail.com
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":1,"name":"zahra","email":"zahra@gmail.com","avatar":"clients/image.png", "gender": "", "anatomy": []}}
     * @param UpdateRequest $updateRequest
     * @return JsonResponse
     * @throws FailException
     */
    public function update(UpdateRequest $updateRequest)
    {
        $data = $updateRequest->only([
            "name",
            "email",
        ]);
        return $this->clientService->update($data);
    }

    /**
     * delete avatar
     *
     * Remove avatar from file storage and update client information
     *
     * @bodyParam avatar string required avatar uploaded path. Example: clients/image.png
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Updated!","data":[{"name" : "zahra", "email":"zahra@gmail.com", "avatar":"", "gender":"", "anatomy": []]}
     * @param AvatarRequest $avatarRequest
     * @return JsonResponse
     */
    public function deleteAvatar(AvatarRequest $avatarRequest)
    {
        $data = $avatarRequest->only([
            "avatar"
        ]);
        return $this->clientService->deleteAvatar($data);
    }

    /**
     * update avatar
     *
     * Update avatar from client data
     *
     * @bodyParam avatar string required The uploaded avatar path. Example: clients/image2.png
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":1,"name":"zahra","email":"zahra@gmail.com","avatar":"clients/image2.png", "anatomy": []}}
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 422 {"success":false,"message":"The image Not Found"}
     * @param AvatarRequest $avatarRequest
     * @return JsonResponse
     * @throws FailException
     */
    public function updateAvatar(AvatarRequest $avatarRequest)
    {
        $data = $avatarRequest->only([
            "avatar"
        ]);
        return $this->clientService->updateAvatar($data);
    }

    /**
     * upload avatar
     *
     * upload avatar to file storage
     *
     * @bodyParam avatar file required avatar file.
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 422 {"success":false,"message":"Invalid avatar Uploaded!"}
     * @response 200 {"success":true,"message":"Successfully Uploaded!","data":["path" : "clients/wardrobe_sxj.jpg"]}
     * @param UploadRequest $uploadRequest
     * @return JsonResponse
     */
    public function upload(UploadRequest $uploadRequest)
    {
        $data = $uploadRequest->only([
            "avatar"
        ]);
        return $this->clientService->upload($data);
    }
}
