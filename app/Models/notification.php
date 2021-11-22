<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    use HasFactory;

    protected $fillable= [
        'ref',
        'message',
        'sender_id',
        'receiver_id',
        
    ];
}
