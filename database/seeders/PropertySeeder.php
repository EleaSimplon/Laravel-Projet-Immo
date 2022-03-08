<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $property = new Property;
            $property->title = $faker->title;
            $property->description = $faker->text;
            $property->size = $faker->numberBetween(1, 20);
            $property->floor = $faker->numberBetween(1, 20);;
            $property->image = $faker->image;
            $property->room = $faker->numberBetween(1, 20);;
            $property->price = $faker->numberBetween(1, 20);;
            $property->address = $faker->address;
            $property->post_code = $faker->numberBetween(42000, 42100);;
            $property->city = $faker->city;
            $property->save();
        }
    }
}
