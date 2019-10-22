<?php

use Faker\Factory;
use App\User;
use App\Support\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        User::create([
            'name' => 'Fiqy Ainuzzaqy',
            'username' => 'fq_whysoserious',
            'email' => 'fiqy_a@rabbit-media.net',
            'password' => bcrypt('Fiqy2112'),
            'position' => 'Developer',
            'role' => Role::ROOT,
            'facebook' => 'FqNkk',
            'twitter' => 'FqNkk',
            'instagram' => 'fq_whysoserious',
            'whatsapp' => '+628563094333',
        ]);

        User::create([
            'name' => 'Sindhu',
            'username' => 'sindhu.scott.royce',
            'email' => 'sindhu@ppf.co.id',
            'password' => bcrypt('ppfindonesia2112'),
            'role' => Role::ROOT,
            'position' => 'Owner',
            'instagram' => 'sindhu.scott.royce',
            'whatsapp' => '+6281615007777',
        ]);

        User::create([
            'name' => 'Marsella Tanaya',
            'username' => 'mar_tanaya',
            'email' => 'marsella@ppf.co.id',
            'password' => bcrypt('ppfindonesia2112'),
            'role' => Role::ADMIN,
            'position' => 'Contributor',
            'instagram' => 'mar_tanaya',
            'whatsapp' => '+628113051492',
        ]);

        /*for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->firstName . ' ' . $faker->lastName,
                'username' => strtolower($faker->userName),
                'email' => $faker->safeEmail,
                'password' => bcrypt('ppfindonesia2112'),
                'position' => 'Contributor',
                'role' => Role::ADMIN,
                'about' => \Faker\Factory::create()->paragraph,
                'whatsapp' => '+628123456789'.rand(0,9),
            ]);
        }

        foreach (User::where('role', Role::ADMIN)->get() as $row) {
            $row->update([
                'email' => strtolower(str_replace(' ', '', $row->name)) . '@ppf.co.id',
                'facebook' => $row->username,
                'twitter' => $row->username,
                'instagram' => $row->username,
            ]);
        }*/
    }
}
