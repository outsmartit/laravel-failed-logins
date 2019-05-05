<?php

namespace Outsmartit\Failedlogins\Listeners;

use Illuminate\Auth\Events\Failed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class FailedLoginAttempt
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
     * @param  object  $event
     * @return void
     */
    public function handle(Failed $event)
    {
        //
        if($event->user) {
            $user_id = $event->user->id;
        }
        else {
            $user_id = null;
        }
        \Outsmartit\Failedlogins\FailedLoginAttempt::create([
            'user_id' => $user_id,
            'email_address' => $event->credentials['email'],
            'ip_address'=> request()->ip()
        ]);
    }
}
