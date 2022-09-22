<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RpicUser extends Model
{
    use HasFactory;

    protected $table = 'rpics_users';

    protected $fillable = [
        'rpics_id',
        'user_id'
    ];
}
