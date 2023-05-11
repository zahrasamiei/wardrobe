<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Message extends Model
{
    use HasFactory;

    /**
     * The table columns that will change in code
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "email",
        "message",
        "reply_id",
        "admin_id",
        "reply_email_sent",
    ];

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
            "message",
        ];
    }

    /**
     * get reply for message
     *
     * @return BelongsTo
     */
    public function reply()
    {
        return $this->belongsTo(Message::class, 'reply_id', 'id');
    }

    /**
     * get admin for a message
     *
     * @return BelongsTo
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id')->whereNotNull("admin_id");
    }
}
