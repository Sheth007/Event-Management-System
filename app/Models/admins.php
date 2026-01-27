<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admins extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $guard = 'admins';
    protected $table = 'admins';

    protected $fillable = [
        'email',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
