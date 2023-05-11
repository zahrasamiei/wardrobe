<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmailVerification extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "client_id",
        "token",
        "expired_at",
        "is_expired",
        "created_at",
    ];

    /**
     * get client for each email verification
     *
     * @return BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * check email is verified
     *
     * @return boolean
     */
    public function hasVerified()
    {
        return $this->client->isVerified;
    }

    /**
     * check token expired
     *
     * @return boolean
     */
    public function hasExpired()
    {
        return checkDateExpired($this->expired_at) && $this->is_expired;
    }
}
