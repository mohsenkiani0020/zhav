<?php

namespace App\Events;

use AllowDynamicProperties;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

#[AllowDynamicProperties] class ResendVerificationCodeEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

//    /**
//     * Get the channels the event should broadcast on.
//     *
//     * @return array<int, \Illuminate\Broadcasting\Channel>
//     */
//    public function broadcastOn(): array
//    {
//        return [
//            new PrivateChannel('channel-name'),
//        ];
//    }
}
