<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Outfit extends Model
{
    use HasFactory;

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "season_id",
        "occasion_id",
        "bookmarked",
    ];

    /**
     * get season for each outfit
     *
     * @return HasOne
     */
    public function season()
    {
        return $this->hasOne(Season::class, "id", "season_id");
    }

    /**
     * get occasion for each outfit
     *
     * @return BelongsTo
     */
    public function occasion()
    {
        return $this->belongsTo(Occasion::class, "occasion_id", "id");
    }

    /**
     * get occasion for each outfit
     *
     * @return BelongsToMany
     */
    public function clothes()
    {
        return $this->belongsToMany(Cloth::class, "outfit_clothes");
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
            "bookmarked",
            "occasion_id",
            "season_id",
        ];
    }
}
