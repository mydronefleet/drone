<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@123'),
        ]);
		
		DB::table('roles')->insert([
            'name' => "Admin",
            'guard_name' => 'web'
        ]);
    }
}
