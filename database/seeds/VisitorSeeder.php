<?php

use App\Models\Visitor;
use Faker\Factory;
use Illuminate\Database\Seeder;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = Factory::create('id_ID');

        for ($i = 0; $i < 25; $i++) {
            Visitor::create([
                'ip' => $faker->ipv4,
                'hits' => rand(1,10),
                'visit_date' => $faker->date('Y-m-d'),
                'visit_time' => $faker->time('h:i:s'),
                'date' => $faker->date('Y-m-d')
            ]);
        }*/
    }
}
