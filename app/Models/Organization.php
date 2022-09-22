<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model {

	protected $table = 'organizations';

    protected $fillable = [
        'org_name',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'country',
        'zip_code',
        'pic',
        'poc_name',
        'poc_email',
        'poc_phone',
        'short_desc',
        'long_desc'

    ];
	
}
