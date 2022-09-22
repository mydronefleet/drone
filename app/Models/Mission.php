<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;


    protected $table = 'missions';

    protected $fillable = [
        'name',
        'requestor_name',
        'requestor_email',
        'mission_date',
        'mission_types',
        'mission_location',
        'pilot',
        'description'
    ];
}
