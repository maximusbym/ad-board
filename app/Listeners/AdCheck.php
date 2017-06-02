<?php

namespace App\Listeners;

use App\Events\AdWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdCheck
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
     * @param  AdWasCreated  $event
     * @return void
     */
    public function handle(AdWasCreated $event)
    {
        dump('AdWasCreated LISTENER');
    }
}
