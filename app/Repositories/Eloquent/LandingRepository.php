<?php

namespace App\Repositories\Eloquent;

use App\Models\Landing;
use App\Traits\ResponseApi;

class LandingRepository extends BaseRepository
{
    use ResponseApi;


    /**
     * LandingRepository constructor.
     *
     * @param Landing $model
     */
    public function __construct(
        Landing $model
    )
    {
        parent::__construct($model);
    }
}
