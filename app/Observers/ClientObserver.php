<?php

namespace App\Observers;

use App\Models\Client;
use App\Repositories\Eloquent\ClientRepository;
use App\Repositories\Eloquent\EmailVerificationRepository;

class ClientObserver
{

    public function __construct(
        protected EmailVerificationRepository $emailVerificationRepository,
        protected ClientRepository $clientRepository
    )
    {

    }

    /**
     * Handle the Client "created" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function created(Client $client)
    {
        if (!$client->isVerified()) {
            #add email verify request
            $this->emailVerificationRepository->add($client);
        }
    }

    /**
     * Handle the Client "updated" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function updating(Client $client)
    {
        $client_id = $client->id;
        $email = $client->email;

        #check if email not changed return
        if ($client->getOriginal("email") == $email) return;

        #reset email verification setting
        $this->clientRepository->resetEmailVerificationSettings($client_id);
        #remove old email verification tokens
        $this->emailVerificationRepository->delete(compact('client_id'));
        #add new email verification token
        $this->emailVerificationRepository->add($client);
    }

    /**
     * Handle the Client "deleted" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function deleted(Client $client)
    {
        //
    }

    /**
     * Handle the Client "restored" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function restored(Client $client)
    {
        dd("restore");
    }

    /**
     * Handle the Client "force deleted" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function forceDeleted(Client $client)
    {
        //
    }
}
