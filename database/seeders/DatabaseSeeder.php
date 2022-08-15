<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        'name' => 'admin',
        'email' => 'admin@dkluizz.com',
        'password' => bcrypt('admin123456'),
        'is_admin' => '1'
    ]); 
    }
}
