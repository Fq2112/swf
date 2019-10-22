<?php

use Faker\Factory;
use App\Models\Installers;
use Illuminate\Database\Seeder;

class InstallerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Installers::create([
            'logo' => 'versamedia.png',
            'name' => 'VersaMedia',
            'phone' => '+6281330088099',
            'address' => 'Jl. Kemayoran Baru No.3, Krembangan, Surabaya, Jawa Timur – 60175.',
            'email' => 'versamedia@hotmail.com',
            'city' => 'Surabaya City',
            'link' => 'https://instagram.com/versamedia',
            'lat' => '-7.2431537',
            'long' => '112.7314676'
        ]);

        /*for ($i = 0; $i < 9; $i++) {
            Installers::create([
                'logo' => $faker->imageUrl(),
                'name' => $faker->company,
                'phone' => '+62312345678',
                'address' => Factory::create('id_ID')->address,
                'email' => $faker->companyEmail,
                'city' => Factory::create('id_ID')->city,
                'link' => $faker->url,
                'lat' => $faker->latitude(-7, -5),
                'long' => $faker->longitude(110, 112)
            ]);
        }*/
    }
}
