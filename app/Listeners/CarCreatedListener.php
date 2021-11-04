<?php

namespace App\Listeners;

use App\Events\CarCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CarCreatedListener
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
    public function handle(CarCreatedEvent $event)
    {
        \Log::info('CAR_CREATED_LISTENER',[
            'user_id' => $event->user->id,
            'email'=>$event->user->email
        ]);
        \Log::info('Sending user email...');
    }

}
