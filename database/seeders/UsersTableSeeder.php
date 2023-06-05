<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name'=>'Admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'admin',
                'status'=>'active',
            ],

            //Doctor

            [
                'name'=>'Doctor',
                'username'=>'doctor',
                'email'=>'doctor@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'doctor',
                'status'=>'active',
            ],

            //Pasient
            [
                'name'=>'Pasient',
                'username'=>'pasient',
                'email'=>'pasient@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'pasient',
                'status'=>'active',
            ],
        ]);
    }
}
