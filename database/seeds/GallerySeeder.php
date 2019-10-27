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
        for ($i = 0; $i < 47; $i++) {
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
            'title' => 'Wrap Like a King 2019 - Enter and Win',
            'caption' => 'It’s time to put your creativity front and center. Use your wrap skills to make a statement with your submission. Unique designs, outstanding technique and showmanship are what make the challenge awesome. Just don’t be shy if you want to reign supreme. Show us what you got! Enter the 2019 Wrap Like a King Challenge here: https://www.wraplikeaking.com/',
            'thumbnail' => 'wlak2019_logo.png',
            'file' => 'https://youtu.be/KE1nWkSC1po'
        ]);

        Gallery::create([
            'type' => 'videos',
            'title' => 'Wrap Like a King 2019 Regional Winners',
            'caption' => 'Thank you all for submitting your entries! After another competitive year of Wrap Like A King, we have named our Regional Wrap Kings! #WLAK2019',
            'thumbnail' => 'wlak2019_champ.png',
            'file' => 'https://youtu.be/V2QiLgZvVvQ'
        ]);

        Gallery::create([
            'type' => 'videos',
            'title' => 'BIG MONEY CAR - Wrap Like a King 2019',
            'caption' => 'BIG MONEY CAR  for Wrap Like a King 2019 by Custom Wrap Design @cwdwrap https://www.instagram.com/cwdwrap/',
            'thumbnail' => 'wlak2019_bmc.png',
            'file' => 'https://youtu.be/jpOICdvNzFA'
        ]);

        Gallery::create([
            'type' => 'videos',
            'title' => 'Gundam GTR - Wrap Like A King 2019',
            'caption' => 'Gundam GTR features a fully printed chrome wrap with Avery Silver Conform Chrome, DOL 1460Z laminate and SWF Satin Black accents. The design process started with hand drawn characters that were illustrated digitally, and then brought to life with countless hours of wrap design. The design was printed directly on Avery Silver Chrome and laminated with 1460Z which gives it an amazing look and finish. Some fine details of the wrap include matching wheel spoke wrap, satin black accents, ghosted Japanese lettering, smoke tail light wrap, hidden design elements.',
            'thumbnail' => 'wlak2019_gundam.png',
            'file' => 'https://youtu.be/yoETwyDASXs'
        ]);

        Gallery::create([
            'type' => 'videos',
            'title' => 'Wrap Like A King 2019 from DC Town Shanghai China SLS AMG Wrapping',
            'caption' => 'DC Town Shanghai China SLS AMG Wrapping #WLAK2019',
            'thumbnail' => 'wlak2019_shanghai.png',
            'file' => 'https://youtu.be/jWj2j9vZVzM'
        ]);

        Gallery::create([
            'type' => 'videos',
            'title' => 'Installation Process for Wrap Like a King 2019 Entry - Acura NSX - Creature Wrap',
            'caption' => 'Wrap Like a King 2019 competition... Follow along as our team prints on silver chrome, creates custom embossing, and fine-tunes the details on this one-of-a-kind car. Feel the emotions as the wrap project starts to take shape. Our amazing team put forth an incredible effort to create our creature. This video highlights their hard work.',
            'thumbnail' => 'wlak2019_metrowrapz.png',
            'file' => 'https://youtu.be/1bsR_LiIAms'
        ]);
    }
}
