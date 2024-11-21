<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

//Route::prefix('/v1')->resource('/note', NoteController::class);
Route::resource('/note', NoteController::class);

