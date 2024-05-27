<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{

    public function run(Faker $faker): void
    {

        $train_companies = ['Italo', 'Trenitalia', 'Trenord'];

        for ($i = 0; $i < 10; $i++){

            $newtrain = new Train();

            $newtrain->company = $faker->randomElement($train_companies);
            $newtrain->departure_station = $faker->city();
            $newtrain->arrival_station = $faker->city();
            $newtrain->train_code = $faker->bothify('??#####');
            $newtrain->departure_time = $faker->dateTimeInInterval('-1 days', '+1 days');
            $newtrain->arrival_time = $faker->dateTimeInInterval('now', '+1 days');
            $newtrain->wagons_number = $faker->numberBetween(5, 15);

            $newtrain->save();

        }
    }
}
