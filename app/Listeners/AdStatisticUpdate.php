<?php

namespace App\Listeners;

use App\Events\AdWasDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdStatisticUpdate
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
     * @param  AdWasDeleted  $event
     * @return void
     */
    public function handle(AdWasDeleted $event)
    {
        //
    }
}
