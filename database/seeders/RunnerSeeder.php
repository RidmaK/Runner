<?php

namespace Database\Seeders;

use App\Models\Race;
use App\Models\Runner;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class RunnerSeeder extends Seeder
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
        $races = Race::all()->pluck('id');
        foreach(range(1,50) as $index){
            $Race = Runner::create([
                'name' => $faker->Name(),
                'sex' => $faker->randomElement(['male', 'female']),
                'color' => $faker->regexify('[A-Za-z]{1}'),
                'Owner' => $faker->Name(),
                'age' => $faker->regexify('[0-9]{2}'),
                'race_id' => $faker->randomElement($races),
            ]);
        }
    }
}
