<?php

use App\Http\Controllers\Api\SupportController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/suportes', SupportController::class);