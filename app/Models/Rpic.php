<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rpic extends Model
{
    use HasFactory;

    protected $table = 'rpicss';

    protected $fillable = [
        'org_id',
        'first_name',
        'last_name',
        'date_of_certified',
        'mission_type',
        'callsign',
        'pic',
        'certificate',
        'certificate_exp',
        'short_desc',
        'long_desc'
    ];
}
