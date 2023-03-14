<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = new Train;
        $newTrain->company = ?;
        $newTrain->departure_station = ?;
        $newTrain->arrival_station = ?;
        $newTrain->departure_time = ?;
        $newTrain->arrival_time = ?;
        $newTrain->train_code = ?;
        $newTrain->carriage_number = ?;
        $newTrain->on_time = ?;
        $newTrain->is_canceled = ?;
        $newTrain->save();
    }
}
