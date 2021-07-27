<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'messages');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'messages');
    }
}
