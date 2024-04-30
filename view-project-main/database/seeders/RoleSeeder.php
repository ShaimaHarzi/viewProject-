<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'Administrator handle all application ressources and managements'
        ]);
        DB::table('roles')->insert([
            'name' => 'Studen',
            'description' => 'Student is a part of application where he/she will consume our APIs'
        ]);
        DB::table('roles')->insert([
            'name' => 'Tutor',
            'description' => 'Tutors Works with students to improve their skills in certain subjects'
        ]);
        DB::table('roles')->insert([
            'name' => 'Mentor',
            'description' => 'A mentor is an experienced and thoughtful leader who is committed to investing one’s time to assist in the growth and development of others'
        ]);
        DB::table('roles')->insert([
            'name' => 'Institute',
            'description' => 'Institute is an organization whose purpose is to advance the study of a particular subject'
        ]);
        DB::table('roles')->insert([
            'name' => 'Gardian',
            'description' => 'Gardian Description'
        ]);
    }
}
