<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatMessage;
use App\Models\ChatRoom;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function rooms()
    {
        return ChatRoom::all();
    }
    public function message(Request $request,$id)
    {
        return ChatMessage::where('chat_room_id',$id)
        ->with('user')
        ->orderBy('created_at','DESC')
        ->get();
    }

    public function newMessage(Request $request,$id)
    {
        $newMessage =new ChatMessage;
        $newMessage->user_id    =   Auth::id();
        $newMessage->message    =   $request->message;
        $newMessage->chat_room_id   =   $id;
        $newMessage->save();
        return $newMessage;

    }
}
