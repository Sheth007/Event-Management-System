<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    protected $fillable = [
        'user_id',
        'event_id',
        'name',
        'email',
        'phone',
        'created_at',
        'updated_at'
    ];
}
