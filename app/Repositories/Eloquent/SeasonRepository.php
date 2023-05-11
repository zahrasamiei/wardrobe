<?php

namespace App\Repositories\Eloquent;

use App\Models\Season;
use App\Traits\ResponseApi;

class SeasonRepository extends BaseRepository
{
    use ResponseApi;


    /**
     * SeasonRepository constructor.
     *
     * @param Season $model
     */
    public function __construct(
        Season $model
    )
    {
        parent::__construct($model);
    }
}
