<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function home()
    {
        $notifications = auth()->user()->notifications;
        return view('user.home', compact('notifications'));
    }
}
