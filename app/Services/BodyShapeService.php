<?php

namespace App\Services;

use App\Http\Resources\BodyShapeResource;
use App\Repositories\Eloquent\BodyShapeRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;

class BodyShapeService
{
    use ResponseApi;

    /**
     * @var BodyShapeRepository $bodyShapeRepository
     */
    protected $bodyShapeRepository;

    /**
     * ResetPasswordService constructor.
     *
     * @param BodyShapeRepository $bodyShapeRepository
     */
    public function __construct(
        BodyShapeRepository $bodyShapeRepository
    )
    {
        $this->bodyShapeRepository = $bodyShapeRepository;
    }

    /**
     * get all bodyShapes
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->success(
            __("lang.successfullyFound"),
            BodyShapeResource::collection($this->bodyShapeRepository->all())
        );
    }

    /**
     * create new bodyShape
     *
     * @return JsonResponse
     */
    public function create($data)
    {
        return $this->success(
            __("lang.successfullyCreate"),
            new BodyShapeResource($this->bodyShapeRepository->create($data))
        );
    }

    /**
     * show specific bodyShape
     *
     * @return JsonResponse
     */
    public function show($bodyShape)
    {
        return $this->success(
            __("lang.successfullyFound"),
            new BodyShapeResource($bodyShape)
        );
    }

    /**
     * update specific bodyShape
     *
     * @return JsonResponse
     */
    public function update($data, $bodyShape)
    {
        $this->bodyShapeRepository->update([
            "find" => [
                "id" => $bodyShape->id
            ],
            "update" => $data
        ]);

        return $this->success(
            __("lang.successfullyUpdate"),
            new BodyShapeResource(
                $this->bodyShapeRepository->find([
                    "id" => $bodyShape->id
                ])->first()
            )
        );
    }

    /**
     * update specific bodyShape
     *
     * @return JsonResponse
     */
    public function delete($bodyShape)
    {
        $this->bodyShapeRepository->delete([
            "id" => $bodyShape->id
        ]);
        return $this->success(
            __("lang.successfullyDelete"),
            []
        );
    }

}
