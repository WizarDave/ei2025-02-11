<?php

namespace App\Listeners;

use App\Notifications\WelcomeNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserRegisteredListener
{
    /**
     * Send a welcome email to the user
     */
    public function handle(Registered $event): void
    {
        $event->user->notify(new WelcomeNotification());
    }
}
