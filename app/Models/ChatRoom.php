<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use App\Models\ChatMessage;
use App\Models\User;

class ChatRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function message()
    {
        return $this->hasMany(ChatMessage::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
