<?php

namespace App\Repositories\Eloquent;

use App\Models\Occasion;
use App\Traits\ResponseApi;

class OccasionRepository extends BaseRepository
{
    use ResponseApi;


    /**
     * OccasionRepository constructor.
     *
     * @param Occasion $model
     */
    public function __construct(
        Occasion $model
    )
    {
        parent::__construct($model);
    }
}
