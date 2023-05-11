<?php

namespace App\Repositories\Eloquent;

use App\Exceptions\FailException;
use App\Models\PasswordReset;

class PasswordResetRepository extends BaseRepository
{
    /**
     * PasswordResetRepository constructor.
     *
     * @param PasswordReset $model
     */
    public function __construct(
        PasswordReset $model
    )
    {
        parent::__construct($model);
    }

    /**
     * check new request for password reset is valid or not and expire old requests
     *
     * @param $client_id
     * @return bool
     * @throws FailException
     */
    public function checkNewRequest($client_id)
    {
        $is_expired = 0;
        #find password reset not expired for this client
        $passwordReset = $this->find(compact('client_id', 'is_expired'))->where("expired_at", ">=", now())->first();
        if (empty($passwordReset)) return true;
        #end

        #get created_at and number of minute valid for new request after created_at
        $created_at = $passwordReset->created_at;
        $newRequest = config("configs.newRequestMinuteForPasswordReset");
        #end

        #check new request is valid
        $check = checkDateExpired($created_at, minutesAfterDate($newRequest, $created_at));

        #expire old request for this client
        if ($check) {
            $this->update([
                "find" => compact('client_id'),
                "update" => [
                    "expired_at" => "0000-00-00 00:00:00",
                    "is_expired" => 1
                ]
            ]);
        }

        return $check;
    }
}
