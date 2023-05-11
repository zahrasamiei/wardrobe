<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OutfitCloth extends Model
{
    use HasFactory;

    /**
     * change table name
     *
     * @var string
     */
    protected $table = "outfit_clothes";

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "cloth_id",
        "outfit_id",
    ];

    /**
     * get cloth for each outfit cloth
     *
     * @return BelongsTo
     */
    public function cloth()
    {
        return $this->belongsTo(Cloth::class);
    }

    /**
     * get outfit for each outfit cloth
     *
     * @return BelongsTo
     */
    public function outfit()
    {
        return $this->belongsTo(Outfit::class);
    }

    /**
     * get valid columns for search
     *
     * @return array
     */
    public function searchColumns()
    {
        return [

        ];
    }
}
