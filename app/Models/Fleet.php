<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    use HasFactory;


    protected $table = 'fleets';

    protected $fillable = [
        'org_id',
        'equipment',
        'drone',
        'name',
        'make',
        'model',
        'tail_number',
        'date_purchased',
        'batteries',
        'who_purchased',
        'main_rpics',
        'assigned_to',
        'group_own_the_dron',
        'flight_load_out',
        'physical_location',
        'pic',
        'short_desc',
        'long_desc'

    ];
}
