<?php

namespace App\Repositories\Eloquent;

use App\Exceptions\FailException;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientRepository extends BaseRepository
{

    /**
     * ClientRepository constructor.
     *
     * @param Client $model
     */
    public function __construct(Client $model)
    {
        parent::__construct($model);
    }

    /**
     * change email verification settings for client
     *
     * @param $id
     * @throws \App\Exceptions\FailException
     */
    public function resetEmailVerificationSettings($id)
    {
        $is_email_verified = 0;
        $email_verified_at = null;

        $update = compact(
            'email_verified_at',
            'is_email_verified'
        );

        $find = compact('id');

        $this->update(
            compact(
                'find',
                'update'
            )
        );
    }

    /**
     * Create anatomy for client
     *
     * @param $data
     * @param $client
     * @return mixed
     */
    public function createClientData($data, $client)
    {
        return $client->clientData()->create($data);
    }

    /**
     * Update anatomy for client
     *
     * @param $data
     * @param $client
     * @return mixed
     */
    public function updateClientData($data, $client)
    {
        return $client->clientData()->update($data);
    }

    /**
     * Create client & anatomy for client
     *
     * @param $data
     * @param $client
     * @return mixed
     */
    public function createClient($data)
    {
        $clientData = [
            "gender_id" => $data["gender_id"]
        ];
        unset($data["gender_id"]);

        try {
            DB::beginTransaction();
            $client = $this->create($data);
            $this->createClientData($clientData, $client);
            $client = $this->find(["id" => $client->id])->first();
            DB::commit();
            return $client;
        } catch (\Exception $e)
        {
            DB::rollBack();
            throw new FailException(
                $e->getMessage(),
                "500"
            );
        }
    }

    /**
     * update client & anatomy for client
     *
     * @param $data
     * @param $client
     * @return mixed
     */
    public function updateClient($data, $client)
    {
        if (isset($data["gender_id"])) {
            $clientData = [
                "gender_id" => $data["gender_id"]
            ];
            unset($data["gender_id"]);
        }

        try {
            DB::beginTransaction();
            $this->update([
                "find" => [
                    "id" => $client->id
                ],
                "update" => $data
            ]);

            if (!empty($clientData)) {
                $this->createClientData($clientData, $client);
            }

            DB::commit();
            return $client;
        } catch (\Exception $e)
        {
            DB::rollBack();
            throw new FailException(
                $e->getMessage(),
                "500"
            );
        }
    }

    /**
     * check password
     *
     * @param $password
     * @param $client
     * @return mixed
     */
    public function checkPassword($password, $client)
    {
        return Hash::check($password, $client->password);
    }
}
