<?php

namespace Database\Seeders;

use App\Models\FormLastRunr;
use App\Models\Runner;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FormLastRunrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // following line retrieve all the user_ids from DB
        $runners = Runner::all()->pluck('id');
        foreach(range(1,50) as $index){
            $Race = FormLastRunr::create([
                'runner_id' => $faker->randomElement($runners),
                'discription' => $faker->Name(),
            ]);
        }
    }
}
