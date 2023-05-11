<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin;
use App\Traits\ResponseApi;

class AdminRepository extends BaseRepository
{
    use ResponseApi;


    /**
     * AdminRepository constructor.
     *
     * @param Admin $model
     */
    public function __construct(
        Admin $model
    )
    {
        parent::__construct($model);
    }
}
