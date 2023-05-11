<?php

namespace App\Repositories\Eloquent;

use App\Models\Cloth;
use App\Traits\ResponseApi;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class ClothRepository extends BaseRepository
{
    use ResponseApi;

    /**
     * ClothRepository constructor.
     *
     * @param Cloth $model
     */
    public function __construct(
        Cloth $model
    )
    {
        parent::__construct($model);
    }
}
