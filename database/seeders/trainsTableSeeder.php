<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i <10; $i++) {
            $newtrain = new Train();
            $newtrain->azienda = $faker->word();
            $newtrain->stazione_partenza = $faker->word();
            $newtrain->stazione_arrivo = $faker->word();
            $newtrain->orario_partenza = $faker->time();
            $newtrain->orario_arrivo = $faker->time();
            $newtrain->codice_treno = $faker->ean13();
            $newtrain->carrozze = $faker->randomDigit();
            $newtrain->in_orario = $faker->randomElement(['in_orario','in_ritardo']);
            $newtrain->cancellato = $faker->boolean();
            $newtrain->save();
        }
    }
}
