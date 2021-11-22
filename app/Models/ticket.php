<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $table="ticket";
    use HasFactory;

    protected $fillable= [
        'ref',
        'sujet',
        'description',
        'service',
        'criticité',
        'user_id',
        'status',
        'assignedto',
        'dispotech',
    ];
}
