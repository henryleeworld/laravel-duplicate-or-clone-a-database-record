<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;

class UsersController extends Controller
{
    public function duplicate() 
    {
        $user                = User::find(1);
        $newUser             = $user->replicate();
        $newUser->email      = 'noreply_' . time() . '@henryleeworld.com';
        $newUser->name       = $newUser->name . '_cloned';
        $newUser->created_at = Carbon::now();
        $newUser->save();
        echo __('Cloned user ID:') . $user->id . ' ' . __('becomes a new user ID:') .  $newUser->id . __(', the new user name is:') . $newUser->name . PHP_EOL;
    }
}
