<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ChatRoom;

class ChatMessage extends Model
{
    use HasFactory;
    protected $fillable =[
        'message',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function chatRoom()
    {
        return $this->hasOne(ChatRoom::class);
    }

}
