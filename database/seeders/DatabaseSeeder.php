<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,500) as $index) {
            DB::table('empleados')->insert([
                'nombre' => $faker->nombre,
                'apellido' => $faker->apellido,
                'edad' => $faker->edad,
            ]);
        }
    }
}
