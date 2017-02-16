<?php

namespace App\Listeners;

use App\Events\VideoWatch;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class VideoWatchListener
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
     * @param  VideoWatch  $event
     * @return void
     */
    public function handle(VideoWatch $event)
    {
        //
    }
}
