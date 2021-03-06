<?php

namespace App\Events;

use App\Ad;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AdWasCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $ad;

    /**
     * Method description...
     * AdWasCreated constructor.
     * @param Ad $ad - Це оголошення
     */
    public function __construct( Ad $ad )
    {
        $this->ad = $ad;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
//        return new PrivateChannel('channel-name');
    }
}
