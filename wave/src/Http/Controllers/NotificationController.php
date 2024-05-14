<?php

namespace Wave\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        return view('theme::notifications.index', [
            'seo' => [
                'seo_title' => 'Notifications',
                'seo_description' => 'Your notifications',
                'keywords' => 'notifications, notification, notification list, missed notifications, read notifications, unread notifications'
            ]
        ]);
    }

    public function delete(Request $request, $id){
        $notification = auth()->user()->notifications()->where('id', $id)->first();
        if ($notification){
            $notification->delete();
            return response()->json(['type' => 'success', 'message' => 'Marked Notification as Read', 'listid' => $request->listid]);
        }
        else {
            return response()->json(['type' => 'error', 'message' => 'Could not find the specified notification.']);
        }
    }
}
