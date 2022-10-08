<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'role-list',
                'guard_name' => 'web',
                'created_at' => '2022-03-04 20:01:23',
                'updated_at' => '2022-03-04 20:01:23',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'role-create',
                'guard_name' => 'web',
                'created_at' => '2022-03-04 20:01:24',
                'updated_at' => '2022-03-04 20:01:24',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'role-edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-04 20:01:24',
                'updated_at' => '2022-03-04 20:01:24',
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'role-delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-04 20:01:24',
                'updated_at' => '2022-03-04 20:01:24',
            ),
            4 => 
            array (
                'id' => '5',
                'name' => 'organization-list',
                'guard_name' => 'web',
                'created_at' => '2022-03-04 20:01:24',
                'updated_at' => '2022-03-04 20:01:24',
            ),
            5 => 
            array (
                'id' => '6',
                'name' => 'organization-create',
                'guard_name' => 'web',
                'created_at' => '2022-03-04 20:01:24',
                'updated_at' => '2022-03-04 20:01:24',
            ),
            6 => 
            array (
                'id' => '7',
                'name' => 'organization-edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-04 20:01:24',
                'updated_at' => '2022-03-04 20:01:24',
            ),
            7 => 
            array (
                'id' => '8',
                'name' => 'organization-delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-04 20:01:24',
                'updated_at' => '2022-03-04 20:01:24',
            ),
            8 => 
            array (
                'id' => '9',
                'name' => 'fleet-list',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:46',
                'updated_at' => '2022-03-08 03:31:46',
            ),
            9 => 
            array (
                'id' => '10',
                'name' => 'fleet-create',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:46',
                'updated_at' => '2022-03-08 03:31:46',
            ),
            10 => 
            array (
                'id' => '11',
                'name' => 'fleet-edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            11 => 
            array (
                'id' => '12',
                'name' => 'fleet-delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            12 => 
            array (
                'id' => '13',
                'name' => 'rpic-list',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            13 => 
            array (
                'id' => '14',
                'name' => 'rpic-create',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            14 => 
            array (
                'id' => '15',
                'name' => 'rpic-edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            15 => 
            array (
                'id' => '16',
                'name' => 'rpic-delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            16 => 
            array (
                'id' => '17',
                'name' => 'user-list',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            17 => 
            array (
                'id' => '18',
                'name' => 'user-create',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            18 => 
            array (
                'id' => '19',
                'name' => 'user-edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            19 => 
            array (
                'id' => '20',
                'name' => 'user-delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            20 => 
            array (
                'id' => '21',
                'name' => 'sop-list',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            21 => 
            array (
                'id' => '22',
                'name' => 'sop-create',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            22 => 
            array (
                'id' => '23',
                'name' => 'sop-edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:48',
                'updated_at' => '2022-03-08 03:31:48',
            ),
            23 => 
            array (
                'id' => '24',
                'name' => 'sop-delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:48',
                'updated_at' => '2022-03-08 03:31:48',
            ),
            24 => 
            array (
                'id' => '25',
                'name' => 'mission-list',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            25 => 
            array (
                'id' => '26',
                'name' => 'mission-create',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:47',
                'updated_at' => '2022-03-08 03:31:47',
            ),
            26 => 
            array (
                'id' => '27',
                'name' => 'mission-edit',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:48',
                'updated_at' => '2022-03-08 03:31:48',
            ),
            27 => 
            array (
                'id' => '28',
                'name' => 'mission-delete',
                'guard_name' => 'web',
                'created_at' => '2022-03-08 03:31:48',
                'updated_at' => '2022-03-08 03:31:48',
            ),
        ));
        
        
    }
}