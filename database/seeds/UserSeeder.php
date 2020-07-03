<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert( [
            [
                'name' => 'Faiz',
                'email' => 'admin@tourify.id',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'roles' => 'ADMIN' ], 
            [
                'name' => 'Faiza Aulia',
                'email' => 'faizaaulia20@gmail.com',
                'username' => 'faizaaulia',
                'password' => Hash::make('rahasia'),
                'roles' => 'USER' 
            ]
        ]);
    }
}
