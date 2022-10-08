<?php

namespace Database\Seeders;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@123'),
			'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
		
		
		
		DB::table('organizations')->insert(
			[
				'org_name' => "My Drone",
				'address_line1' => 'address_line1',
				'address_line2' => 'address_line2',
				'city' => 'city',
				'state' => 'state',
				'country' => 'country',
				'zip_code' => 'zip_code',
				'pic' => 'pic',
				'short_desc' => 'short_desc',
				'long_desc' => 'long_desc',
				'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
			]
		);
        
		
		
    }
}
