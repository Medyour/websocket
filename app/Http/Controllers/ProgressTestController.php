<?php

namespace App\Http\Controllers;

use App\Events\ProgressUpdated;
use App\Jobs\SimulateProgressJob;
use Illuminate\Http\Request;

class ProgressTestController extends Controller
{
    public function simulateProgress()
    {
        // Simulate broadcasting progress (example: 0% to 100%)
        foreach (range(0, 100, 10) as $percent) {
            event(new ProgressUpdated($percent));
            usleep(500000); // Sleep 0.5 seconds to simulate delay
        }

        return response()->json(['message' => 'Progress simulation complete']);
    }
}
