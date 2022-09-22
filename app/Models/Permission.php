<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
	protected $guard_name = 'api';
	
	protected $fillable = [
        'name', 'guard_name',
    ];
}
