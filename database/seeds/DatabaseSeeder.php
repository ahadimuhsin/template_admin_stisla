<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(JobTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(AdminTableSeeder::class);
    }
}
