<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodGroupsTableSeeder extends Seeder
{
    
    public function run()
    {
        $bloodGroups = [
            ['name' => 'A+'],
            ['name' => 'A-'],
            ['name' => 'B+'],
            ['name' => 'B-'],
            ['name' => 'O+'],
            ['name' => 'O-'],
            ['name' => 'AB+'],
            ['name' => 'AB-'],
        ];

        DB::table('blood_groups')->insert($bloodGroups);
    }
}
