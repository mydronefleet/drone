<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;


    protected $table = 'flights';

    protected $fillable = [
        'mission_id',
        'mission_name',
        'was_rpic',
        'flight_delayed',
		'explaination',
        'who_was',
        'deviat',
        'flight_plan',
        'next_flight',
        'explain_why'
    ];
}
