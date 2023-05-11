<?php

namespace App\Repositories\Eloquent;

use App\Models\Outfit;
use App\Traits\ResponseApi;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class OutfitRepository extends BaseRepository
{
    use ResponseApi;

    /**
     * OutfitRepository constructor.
     *
     * @param Outfit $model
     */
    public function __construct(
        Outfit $model
    )
    {
        parent::__construct($model);
    }
}
