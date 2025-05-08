<?php

namespace App\Jobs;

use App\Events\ProgressUpdated;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;

class SimulateProgressJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(): void
    {
        // Simulate progress updates (0% → 100%)
        /* foreach (range(0, 100, 10) as $percent) {
             event(new ProgressUpdated($percent)); // 🔥 This broadcasts to Reverb
             sleep(1); // simulate delay
         }*/
    }
}
