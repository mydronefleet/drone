<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FleetHasUser extends Model
{
    use HasFactory;


    protected $table = 'fleet_has_users';

    protected $fillable = [
        'fleet_id',
        'user_id'
    ];
}
