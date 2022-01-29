<?php

namespace Database\Seeders;

use App\Models\Meeting;
use App\Models\Race;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RaceSeeder extends Seeder
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
        $meetings = Meeting::all()->pluck('id');
        foreach(range(1,50) as $index){
            $Race = Race::create([
                'name' => $faker->Name(),
                'Start_time' => $faker->dateTimeBetween('+1 week', '+1 month'),
                'End_time' => $faker->dateTimeBetween('+1 week', '+2 month'),
                'meeting_id' => $faker->randomElement($meetings),
            ]);
        }
    }
}
