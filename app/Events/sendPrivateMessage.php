<?php

namespace Pirategram\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Pirategram\PvtMsg;
use Pirategram\myUser;

class sendPrivateMessage implements ShouldBroadcast{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $msg;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(PvtMsg $msg){
        $this->$msg = $msg;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn(){
        return new Channel('Chat');
    }
    
    /*
    public function join(){

    }
    */
}