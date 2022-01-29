<?php

namespace Database\Seeders;

use App\Models\Meeting;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 50) as $index)
        {
            Meeting::create([
                'name' => $faker->userName(),
                'location' => $faker->City(),
                'discription' => $faker->Name()
            ]);
        }
    }
}
