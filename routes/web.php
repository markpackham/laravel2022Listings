<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

Route::get('/', [ListingController::class, 'index']);

// MUST be put before "show" and the path '/listings/{listing}'
Route::get('/listings/create', [ListingController::class, 'create']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);
