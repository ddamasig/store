<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // Generate fake data using Faker
        for ($i=0; $i < 10; $i++) {
            DB::table('items')->insert([
                'title' => $faker->words(3, true),
                'description' => $faker->sentences(10, true),
                'category' => 'ultrabooks',
                'price' => 45000,
                'main_image' => 'macbook-glow.jpg'
            ]);
        }   
    }
}
