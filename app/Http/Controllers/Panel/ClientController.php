<?php

namespace App\Http\Controllers\Panel;

use App\Exceptions\FailException;
use App\Http\Requests\PageRequest;
use App\Http\Requests\Panel\Client\CreateRequest;
use App\Http\Requests\Panel\Client\SearchRequest;
use App\Http\Requests\Panel\Client\AvatarRequest;
use App\Http\Requests\Panel\Client\UpdateRequest;
use App\Http\Requests\Panel\Client\UploadRequest;
use App\Models\Client;
use App\Services\Panel\ClientService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * @group Client
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
     * index
     *
     * Display a listing of the resource.
     *
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function index()
    {
        return $this->clientService->index();
    }

    /**
     * index by page
     *
     * Display a listing of the resource.
     *


     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function getByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->clientService->getByPage($data["page"]);
    }

    /**
     * search
     *
     * list seasons with paginate
     *
     * @bodyParam search string The search value for search clients. Example: search
     * @bodyParam limit int The number of clients in a page, default is 10. Example: 10
     * @bodyParam page int The current page number,default is 1. Example: 1
     * @bodyParam orderColumn string The sort column,default is id. Example: name
     * @bodyParam orderDir string The sort direction,default is asc. Example: desc
     * @bodyParam gender_id int The id from genders table.Example: 1
     * @bodyParam name string The client exact name.Example: zahra
     * @bodyParam email string The client exact email.Example: zahra@gmail.com
     * @bodyParam dateFrom string The client create at start range.Example: 2022-02-01 11:12:12
     * @bodyParam dateTo string The client create at end range.Example: 2022-02-02 11:12:12
     * @response 422 {"success":false,"message":"The limit must be greater than 0.,The page must be greater than 0.,order column Column Not Found."}
     * @response 200 {"success":true,"message":"Successfully Founded!","data":{"total":0,"perPage":10,"page":0,"previousPage":0,"nextPage":null,"lastPage":0,"result":[]}}
     * @param SearchRequest $searchRequest
     * @return JsonResponse
     */
    public function indexSearch(SearchRequest $searchRequest)
    {
        $data = $searchRequest->only([
            "search",
            "limit",
            "page",
            "orderColumn",
            "orderDir",
            "name",
            "email",
            "gender_id",
            "dateFrom",
            "dateTo",
        ]);
        return $this->clientService->indexSearch($data);
    }

    /**
     * create
     *
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required. Example: zahra
     * @bodyParam email string required . Example: zahra@gmail.com
     * @bodyParam password string required . Example: password
     * @bodyParam gender_id integer required The id from genders . Example: 1
     * @bodyParam password_confirmation string required . Example: password
     * @bodyParam avatar string The client avatar uploaded path. Example: clients/image.png
     * @response 422 {"success": false,"message": "The name field is required."}
     * @response 422 {"success":false,"message":"The avatar Not Found"}
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 200 {"success":true,"message":"Successfully Created!","data":{"id":1,"name":"zahra","email":"zahra@gmail.com","avatar":"clients/image.png", "gender":"1", "created_at": "10 July 2022"}}
     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function store(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "name",
            "email",
            "avatar",
            "password",
            "gender_id",
        ]);
        return $this->clientService->create($data);
    }

    /**
     * show
     *
     * Display the specified resource.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @param Client $client
     * @return JsonResponse
     */
    public function show(Client $client)
    {
        return $this->clientService->show($client);
    }

    /**
     * update
     *
     * Update the specified resource in storage.
     *
     * @bodyParam name string. Example: zahra
     * @bodyParam email string. Example: zahra@gmail.com
     * @bodyParam gender_id integer The id from genders . Example: 2
     * @bodyParam avatar string The uploaded image path, if it sends empty avatar will empty . Example: clients/image.png
     * @bodyParam password string . Example: password
     * @bodyParam confirmation_password string if send password then it is required. Example: password
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":1,"name":"zahra","email":"zahra@gmail.com","avatar":"clients/image.png", "gender": "2", "created_at": "10 July 2022"}}
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 422 {"success":false,"message":"The image Not Found"}
     * @param UpdateRequest $updateRequest
     * @param Client $client
     * @return JsonResponse
     * @throws FailException
     */
    public function update(UpdateRequest $updateRequest, Client $client)
    {
        $data = $updateRequest->only([
            "name",
            "email",
            "password",
            "gender_id",
            "avatar",
        ]);
        return $this->clientService->update($data, $client);
    }

    /**
     * delete avatar
     *
     * Remove avatar from file storage
     *
     * @bodyParam avatar string required avatar uploaded path. Example: clients/image.png
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
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
     * Update avatar path for client
     *
     * @bodyParam avatar string required The uploaded avatar path. Example: clients/image2.png
     * @response 200 {"success":true,"message":"Successfully Updated!","data":{"id":1,"name":"zahra","email":"zahra@gmail.com","avatar":"clients/image2.png", "gender": "", "created_at": "10 July 2022"}}
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 422 {"success":false,"message":"The image Not Found"}
     * @param AvatarRequest $avatarRequest
     * @param Client $client
     * @return JsonResponse
     * @throws FailException
     */
    public function updateAvatar(AvatarRequest $avatarRequest, Client $client)
    {
        $data = $avatarRequest->only([
            "avatar"
        ]);
        return $this->clientService->updateAvatar($data, $client);
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

    /**
     * delete
     *
     * Remove the specified resource from storage.
     *
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @responseFile 404 storage/app/public/messages/notfound.json
     * @response 200 {"success":true,"message":"Successfully Deleted!","data":[]}
     * @param Client $client
     * @return JsonResponse
     */
    public function destroy(Client $client)
    {
        return $this->clientService->delete($client);
    }
}
