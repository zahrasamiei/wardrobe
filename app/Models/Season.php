<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Season extends Model
{
    use HasFactory;

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "name",
    ];

    /**
     * get outfits for each outfit
     *
     * @return HasMany
     */
    public function outfits()
    {
        return $this->hasMany(Outfit::class);
    }

    /**
     * get clothes for each season
     *
     * @return HasMany
     */
    public function clothes()
    {
        return $this->hasMany(Cloth::class);
    }

    /**
     * get valid columns for search
     *
     * @return array
     */
    public function searchColumns()
    {
        return [
            "name",
        ];
    }
}
