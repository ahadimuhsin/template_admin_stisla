<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            "job_id" => 4,
            "name" => 'Toni Cahyono',
            "email" => 'toni_cahyo@lalala.com',
            'password' => bcrypt(12345678),
            // 'image' => ''
            'gender' => false,
            'phone_number' => "68762387632"
        ]);

        \App\User::create([
            "job_id" => 1,
            "name" => 'Lauren Tsai',
            "email" => 'lauren@lalala.com',
            'password' => bcrypt(12345678),
            // 'image' => ''
            'gender' => true,
            'phone_number' => "68762387632"
        ]);

        \App\User::create([
            "job_id" => 2,
            "name" => 'Muhsin Ahadi',
            "email" => 'muhsin_ahadi@lalala.com',
            'password' => bcrypt(12345678),
            // 'image' => ''
            'gender' => false,
            'phone_number' => "68762387632"
        ]);

        \App\User::create([
            "job_id" => 3,
            "name" => 'Cristiano Ronaldo',
            "email" => 'cristiano@lalala.com',
            'password' => bcrypt(12345678),
            // 'image' => ''
            'gender' => false,
            'phone_number' => "68762387632"
        ]);

        \App\User::create([
            "job_id" => 5,
            "name" => 'Joko Widodo',
            "email" => 'jokowi@lalala.com',
            'password' => bcrypt(12345678),
            // 'image' => ''
            'gender' => false,
            'phone_number' => "68762387632"
        ]);

        \App\User::create([
            "job_id" => 4,
            "name" => 'Mayweather Jr.',
            "email" => 'mayweather@lalala.com',
            'password' => bcrypt(12345678),
            // 'image' => ''
            'gender' => false,
            'phone_number' => "68762387632"
        ]);
    }
}
