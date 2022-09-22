<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupLeaders extends Model
{
    use HasFactory;


    protected $table = 'group_leaders';

    protected $fillable = [
        'org_id',
        'name',
        'group_type',
        'contact',
        'address_line',
        'address_line2',
        'city',
        'state',
        'country',
        'zipcode',
    ];
}
