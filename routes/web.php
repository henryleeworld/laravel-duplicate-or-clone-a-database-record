<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('users/duplicate/', [UsersController::class, 'duplicate']);
