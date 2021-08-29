<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' =>'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => '1',
        ]);
    }
}
//    php artisan db:seed --class=AdminSeeder  <-- this to create admin