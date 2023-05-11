<?php

namespace App\Repositories\Eloquent;

use App\Exceptions\FailException;
use App\Mail\EmailVerificationMail;
use App\Models\EmailVerification;
use Illuminate\Support\Facades\Mail;

class EmailVerificationRepository extends BaseRepository
{
    /**
     * EmailVerificationRepository constructor.
     *
     * @param EmailVerification $model
     */
    public function __construct(
        EmailVerification $model
    )
    {
        parent::__construct($model);
    }

    /**
     * add new email verification, send mail
     *
     * @param $client
     * @return mixed
     * @throws FailException
     */
    public function add($client)
    {
        #create data for add new email verification
        $token = createCode();
        $client_id = $client->id;
        $expired_at = minutesAfterDate(config("configs.expiredRequestMinuteForEmailVerification"));
        $created_at = now();
        #end

        #create data for send mail
        $name = $client->name;
        $email = $client->email;
        $subject = __("lang.emailVerification");
        #end

        $data = $this->create(
            compact(
                'token',
                'client_id',
                'expired_at',
                'created_at'
            )
        );

        Mail::to($email)->send(
            new EmailVerificationMail(
                compact(
                    'token',
                    'name',
                    'subject',
                )
            )
        );

        return $data;
    }

    /**
     * check new request for email verification is valid or not and expire old requests
     *
     * @param $client_id
     * @return bool
     * @throws FailException
     */
    public function checkNewRequest($client_id)
    {
        $is_expired = 0;
        #find password reset not expired for this client
        $emailVerification = $this->find(compact('client_id', 'is_expired'))->where("expired_at", ">=", now())->first();
        if (empty($emailVerification)) return true;
        #end

        #get created_at and number of minute valid for new request after created_at
        $created_at = $emailVerification->created_at;
        $newRequest = config("configs.newRequestMinuteForEmailVerification");
        #end

        #check new request is valid
        $check = checkDateExpired($created_at, minutesAfterDate($newRequest, $created_at));

        #expire old request for this client
        if ($check) {
            $this->update([
                "find" => compact('client_id'),
                "update" => [
                    "expired_at" => "1999-01-01 12:22:00",
                    "is_expired" => 1
                ]
            ]);
        }

        return $check;
    }
}
