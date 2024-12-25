<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::where('level', 'user')->get();
        return view('admin.dashboard', compact('users'));
    }

    public function sendNotification(Request $request)
    {
        Notification::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'message' => $request->message,
        ]);
        return back()->with('success', 'Notification sent!');
    }
}
