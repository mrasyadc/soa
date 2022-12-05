<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationService extends Controller
{
    public function getAllNotification() {
        return response()->json(Notification::all());
    }

    public function addNotification(Request $request) {

        $notification = Notification::create([
            'notification' => $request->notification,
            'status' => 'unread'
        ]);

        return response()->json($notification);
    }

    public function readNotification(Request $request) {
        $notification = Notification::find($request->notificationId);
        $notification->status = 'read';
        $notification->save();

        return response()->json($notification);
    }
}
