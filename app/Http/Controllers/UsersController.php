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
        echo '使用者複製編號：' . $user->id . '成為新使用者編號：' .  $newUser->id . '，新使用者名稱為：' . $newUser->name . PHP_EOL;
    }
}
