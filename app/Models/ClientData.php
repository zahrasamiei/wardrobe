<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ClientData extends Model
{
    use HasFactory;

    protected $table = "client_data";

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "client_id",
        "weight",
        "height",
        "body_shape_id",
        "gender_id",
        "chest_size",
        "waist_size",
        "hip_size",
        "collar_size",
        "shoe_size",
        "age",
    ];

    /**
     * get client for each client data
     *
     * @return BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * get body shape for each client data
     *
     * @return BelongsTo
     */
    public function bodyShape()
    {
        return $this->belongsTo(BodyShape::class);
    }

    /**
     * gender for each client data
     *
     * @return BelongsTo
     */
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    /**
     * get valid columns for search
     *
     * @return array
     */
    public function searchColumns()
    {
        return [
            "weight",
            "height",
            "chest_size",
            "waist_size",
            "hip_size",
            "collar_size",
            "shoe_size",
        ];
    }
}
