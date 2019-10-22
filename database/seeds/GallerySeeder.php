<?php

use App\Models\Gallery;
use Faker\Factory;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $x = 1;
        $y = 1;
        $z = 1;
        for ($i = 0; $i < 20; $i++) {
            Gallery::create([
                'type' => 'photos',
                'title' => 'Photo ' . $x++,
                'caption' => $faker->paragraph,
                'thumbnail' => $y++ . '.jpeg',
                'file' => $z++ . '.jpeg'
            ]);
        }

        Gallery::create([
            'type' => 'videos',
            'title' => 'Avery Dennison SPF-XI Paint Protection Film Instructional Video',
            'caption' => 'Justin Pate and John Scott demonstrate the proper installation process of Avery Dennison\'s new Paint Protection film. This video discusses the properties of the film, product information, recommended tools, SPF-XI install solutions, technical details and more!',
            'thumbnail' => 'instructional-avspf.png',
            'file' => 'https://youtu.be/Sq_GxO7D-3o'
        ]);

        Gallery::create([
            'type' => 'videos',
            'title' => 'Avery Dennison SPF-XI Supreme Protection Film',
            'caption' => 'Avery Dennison SPF-XI Paint Protection Film safeguards the aesthetic appeal of vehicles with the unbeatable self healing properties of a premium conformable polyurethane (PU) film. Watch how easy it is to apply in our step by step guide.',
            'thumbnail' => 'exc_5.jpg',
            'file' => 'https://youtu.be/wFzwt2my2TQ'
        ]);

        Gallery::create([
            'type' => 'videos',
            'title' => 'Avery Dennison Europe Supreme Protection Film',
            'caption' => 'Introducing the latest addition to the Automotive Solutions from Avery Dennison.',
            'thumbnail' => 'avspf2.png',
            'file' => 'https://youtu.be/6jOPQDNHQjE'
        ]);

        Gallery::create([
            'type' => 'videos',
            'title' => 'Avery Dennison SPF-XI Supreme Protection: The perfect way to wrap.',
            'caption' => 'Avery Dennison Supreme Protection Film XI (SPF-XI) improves and safeguards vehicle aesthetics, while helping to retain resale value.',
            'thumbnail' => 'perfect-way-to-wrap.png',
            'file' => 'https://youtu.be/lGACXqnR9PQ'
        ]);
    }
}
