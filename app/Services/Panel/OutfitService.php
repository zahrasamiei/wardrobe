<?php

namespace App\Services\Panel;

use App\Exceptions\FailException;
use App\Http\Resources\Panel\OutfitResource;
use App\Http\Resources\PaginationResource;
use App\Repositories\Eloquent\OutfitRepository;
use App\Traits\ResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class OutfitService
{
    use ResponseApi;

    /**
     * ResetPasswordService constructor.
     *
     * @param OutfitRepository $outfitRepository
     */
    public function __construct(
        protected OutfitRepository $outfitRepository
    )
    {

    }

    /**
     * get all outfits for a client
     *
     * @param $client_id
     * @return JsonResponse
     */
    public function index($client_id)
    {
        return $this->success(
            __("lang.successfullyFound"),
            OutfitResource::collection(
                $this->outfitRepository->findByRelation(
                    "clothes",
                    [
                        "key" => "client_id",
                        "value" => $client_id,
                    ]
                )
                ->get()
            )
        );
    }

    /**
     * get all outfits for a client
     *
     * @param $client_id
     * @param $page
     * @return JsonResponse
     */
    public function getByPage($client_id, $page)
    {
        return $this->success(
            __("lang.successfullyFound"),
            OutfitResource::collection(
                $this->outfitRepository->findByRelation(
                    "clothes",
                    [
                        "key" => "client_id",
                        "value" => $client_id,
                    ]
                )
                ->paginate(10, ['*'], 'page', $page)
            )
        );
    }

    /**
     * show outfits with search,paginate and sort
     *
     * @return JsonResponse
     */
    public function indexSearch($data, $client_id)
    {
        $data["limit"] = $data["limit"] ?? config("configs.limit");
        $data["page"] = $data["page"] ?? config("configs.page");
        $data["orderDir"] = $data["orderDir"] ?? config("configs.orderDir");
        $data["orderColumn"] = $data["orderColumn"] ?? config("configs.orderColumn");
        $data["search"] = $data["search"] ?? "";
        $data["columns"] = getModelColumns("outfits");
        $data["relations"][] = [
            "table" => "clothes",
            "key" => "client_id",
            "value" => $client_id
        ];

        $result = $this->outfitRepository->search($data);
        $result["data"] = OutfitResource::collection($result["data"]);

        #add data to database
        return $this->success(
            __("lang.successfullyFound"),
            new PaginationResource($result)
        );
    }

    /**
     * show specific outfit
     *
     * @param $outfit
     * @param bool $child
     * @param null $client_id
     * @return JsonResponse
     * @throws FailException
     */
    public function show($outfit, $client_id)
    {
        if (!$this->checkClient($client_id, $outfit)) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }

        return $this->success(
            __("lang.successfullyFound"),
            new OutfitResource($outfit)
        );
    }

    /**
     * check outft client is given client
     *
     * @param $client_id
     * @param $outfit
     * @return boolean
     */
    private function checkClient($client_id, $outfit)
    {
        return $outfit->clothes->pluck("client_id")->diff(collect($client_id))->isEmpty();
    }

}
