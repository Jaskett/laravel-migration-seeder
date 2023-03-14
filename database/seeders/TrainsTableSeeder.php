<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

// Helpers
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train;
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            while($newTrain->departure_station == $newTrain->arrival_station) {
                $newTrain->arrival_station = $faker->city();
            }
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_time = $faker->dateTimeBetween('+1 week', '+2 weeks');
            $newTrain->train_code = strtoupper($faker->bothify('??###'));
            $newTrain->carriage_number = $faker->numberBetween(2, 15);
            $newTrain->on_time = rand(0, 1);
            $newTrain->is_canceled = rand(0, 1);
            $newTrain->save();
        }
    }
}
