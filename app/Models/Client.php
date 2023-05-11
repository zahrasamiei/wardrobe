<?php

namespace App\Models;

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "email",
        "password",
        "avatar",
        "email_verified_at",
        "is_email_verified",
    ];

    /**
     * The attributes that should be changed for show.
     *
     * @var array<int, string>
     */
    protected $casts = [
        "email_verified_at" => 'datetime',
        "created_at" => 'datetime',
        "updated_at" => 'datetime',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * get password reset for each client
     *
     * @return HasOne
     */
    public function passwordReset()
    {
        return $this->hasOne(PasswordReset::class);
    }

    /**
     * get email verification for each client
     *
     * @return HasOne
     */
    public function emailVerification()
    {
        return $this->hasOne(EmailVerification::class);
    }

    /**
     * get client data for each client
     *
     * @return HasOne
     */
    public function clientData()
    {
        return $this->hasOne(ClientData::class);
    }

    /**
     * get client data for each client
     *
     * @return HasMany
     */
    public function clothes()
    {
        return $this->hasMany(Cloth::class);
    }

    /**
     * check email is verified
     *
     * @return boolean
     */
    public function isVerified()
    {
        return $this->is_email_verified;
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
            "email",
            "created_at",
        ];
    }
}
