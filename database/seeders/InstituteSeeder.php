<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutes')->insert([
            'name' => 'Marsa School',
            'role_id' => 5,
            'address' => 'Tunis, La Marsa 2046'
        ]);
    }
}
