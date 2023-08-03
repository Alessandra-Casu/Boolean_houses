<?php

namespace Database\Seeders;

use App\Models\House;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        // popolamento del db da array
        // $houses = config('houses');
        // foreach ($houses as $arrHouse) {
        //     // metodo 1
        //     // $objHouse = new House();
        //     // $objHouse->reference = $arrHouse['reference']; LL-nnnnnnn
        //     // // ....
        //     // $objHouse->save();

        //     // metodo 2
        //     House::create($arrHouse);
        // }

         // popolamento del db con faker
         for($i = 0; $i < 100; $i++) {
            House::create([
                'reference'         => $faker->bothify('??-########'),
                'address'           => $faker->address(),
                'postal_code'       => $faker->numerify('#####'),
                'city'              => $faker->city(),
                'state'             => $faker->state(),
                'square_meters'     => rand(25,300),
                'rooms'             => rand(1, 25),
                'bathrooms'         => rand(1,4),
                'type'              => $faker->randomElement(['villa', 'appartamento', 'buco', 'penthhouse']),
                'description'       => $faker->paragraphs(rand(2, 6) , true),
                'price'             => rand(10000, 25000),
                'is_available'      => $faker->boolean(),
                'energy_rating'     => $faker->randomElement(['A+++', 'A++', 'A+', 'A', 'B', 'C']),
            ]);
        }
    }
}
