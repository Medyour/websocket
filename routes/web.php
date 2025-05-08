<?php

use App\Http\Controllers\ProgressTestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Progress');
});
Route::get('/simulate-progress', [ProgressTestController::class, 'simulateProgress']);
