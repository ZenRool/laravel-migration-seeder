<?php

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $types = [
            'monolocale',
            'villa',
            'appartamento'
        ];

        //Inserire i record all'interno della tabella
        for ($i = 0; $i < 30; $i++) {
            $train = new Train();
            $house->train_code = 'ref' . $i;
            $house->departure_station = $faker->city();
            $house->arrival_station = $faker->city();
            // qui modificare dati parte 8 dei passaggi di olga
            $house->square_meters = rand(20, 300);
            $house->rooms = rand(1, 10);
            $house->bathrooms = rand(1, 5);
            $house->energy_rating = rand(1, 10);
            $house->type = $types[rand(0, count($types) - 1)];
            $house->description = $faker->text();
            $house->price = rand(20000, 500000);

            // Per salvare i dati nel database
            $house->save();
        }
    }
}
