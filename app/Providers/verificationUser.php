<?php

namespace App\Providers;

use App\Providers\RegistereUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class verificationUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RegistereUser  $event
     * @return void
     */
    public function handle(RegistereUser $event)
    {
        $email=$event->user->email;
    }
}
