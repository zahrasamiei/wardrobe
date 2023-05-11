<?php

namespace App\Repositories\Eloquent;

use App\Models\Gender;
use App\Traits\ResponseApi;

class GenderRepository extends BaseRepository
{
    use ResponseApi;


    /**
     * GenderRepository constructor.
     *
     * @param Gender $model
     */
    public function __construct(
        Gender $model
    )
    {
        parent::__construct($model);
    }
}
