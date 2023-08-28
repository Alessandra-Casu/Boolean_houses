<?php

namespace Database\Seeders;

use App\Models\Agent;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0;  $i < 20; $i++) {
            $objAgent = new Agent();
            $objAgent -> name = $faker->name ;
            $objAgent  -> age  = rand(18, 60) ;

            //salvare i dati nel database
            $objAgent-> save();
        }
    }
}
