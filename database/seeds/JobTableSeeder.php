<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Job::create([
            "name" => "Wirausaha"
        ]);
        Job::create([
            "name" => "Wiraswasta"
        ]);
        Job::create([
            "name" => "Petani"
        ]);
        Job::create([
            "name" => "Buruh"
        ]);
        Job::create([
            "name" => "Pelajar"
        ]);
        Job::create([
            "name" => "Pejabat Publik"
        ]);
    }
}
