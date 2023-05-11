<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\Occasion\CreateRequest;
use App\Http\Requests\PageRequest;
use App\Services\Application\OccasionService;
use Illuminate\Http\JsonResponse;

class OccasionController extends Controller
{

    /**
     * OccasionController constructor.
     *
     * @param OccasionService $occasionService
     */
    public function __construct(protected OccasionService $occasionService)
    {

    }

    /**
     * occasion index
     *
     * Display a listing of the resource.
     *
     * @group Outfit
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function outfitIndex()
    {
        return $this->occasionService->index();
    }

    /**
     * occasion index
     *
     * Display a listing of the resource.
     *
     * @group Closet
     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function closetIndex()
    {
        return $this->occasionService->index();
    }

    /**
     * occasion index by page
     *
     * Display a listing of the resource.
     *
     * @group Closet


     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function closetGetByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->occasionService->getByPage($data["page"]);
    }

    /**
     * occasion index by page
     *
     * Display a listing of the resource.
     *
     * @group Outfit


     * @responseApiResource App\Http\Resources\ResponseResource
     * @return JsonResponse
     */
    public function outfitGetByPage(PageRequest $pageRequest)
    {
        $data = $pageRequest->only([
            "page"
        ]);
        return $this->occasionService->getByPage($data["page"]);
    }

    /**
     * create occasion
     *
     * Store a newly created resource in storage.
     *
     * @group Closet
     * @bodyParam name string required. Example: party
     * @response 422 {"success":false,"message":"The name field is required."}
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 200 {"success":true,"message":"Successfully Created!","data":{"id":1,"name":"party"}}
     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function closetStore(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "name",
        ]);
        return $this->occasionService->create($data);
    }

    /**
     * create occasion
     *
     * Store a newly created resource in storage.
     *
     * @group Outfit
     * @bodyParam name string required. Example: party
     * @response 422 {"success":false,"message":"The name field is required."}
     * @apiResourceCollection App\Http\Resources\ResponseResource
     * @response 200 {"success":true,"message":"Successfully Created!","data":{"id":1,"name":"party"}}
     * @param CreateRequest $createRequest
     * @return JsonResponse
     */
    public function outfitStore(CreateRequest $createRequest)
    {
        $data = $createRequest->only([
            "name",
        ]);
        return $this->occasionService->create($data);
    }
}
