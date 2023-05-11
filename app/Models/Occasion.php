<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Occasion extends Model
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
     * get clothes for each occasion
     *
     * @return HasMany
     */
    public function clothes()
    {
        return $this->hasMany(Cloth::class);
    }

    /**
     * get outfits for each occasion
     *
     * @return HasMany
     */
    public function outfits()
    {
        return $this->hasMany(Outfit::class);
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
