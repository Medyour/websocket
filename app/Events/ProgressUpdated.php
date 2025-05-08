<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class ProgressUpdated implements ShouldBroadcast
{
    use SerializesModels;

    public $progress;

    public function __construct($progress)
    {
        $this->progress = $progress;
    }

    public function broadcastOn()
    {
        return new Channel('progress-channel');
    }

    public function broadcastAs()
    {
        return 'progress.updated';
    }
}
