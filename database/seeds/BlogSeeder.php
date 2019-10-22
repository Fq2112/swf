<?php

use App\Support\Role;
use App\User;
use App\Models\Blog;
use App\Models\BlogGallery;
use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = Factory::create();

        BlogCategory::create([
            'name' => 'PPF'
        ]);

        BlogCategory::create([
            'name' => 'Automobiles'
        ]);

        $blog = Blog::create([
            'user_id' => rand(User::where('role', Role::ADMIN)->min('id'), User::where('role', Role::ADMIN)->max('id')),
            'category_id' => 1,
            'title' => 'Paint Protection Film (PPF): An Investment In Your Car\'s Future',
            'title_uri' => preg_replace("![^a-z0-9]+!i", "-", strtolower('Paint Protection Film (PPF): An Investment In Your Car\'s Future')),
            'content' => '<p align="justify">Have you ever heard the term paint protection film (or PPF) as it relates to an automobile? Paint protection film, also referred to as clear bra or a “wrap”, is a thin layer of flexible material placed over a vehicle’s body panels to protect them from flying rocks or road debris. This type of protective film can even save your car’s paint from light hail damage or low-speed scrapes that would normally scratch and scar the finish. And while various forms of paint protection film have been around for more than two decades, the technology behind these films has evolved rapidly in recent years.<br><br>Fourteen years ago I bought a new Ford GT, an exotic sports car with a big price tag. As the most expensive car I’d ever purchased I was eager to maintain its “like new” condition, though I also intended to drive it like a regular car. I knew about paint protection film back in 2005, but I had heard enough reports involving the film yellowing or bubbling, or leaving a nasty residue when it was removed, that I didn’t put it on my GT. Over the next 13 years I drove my Ford GT 31,000 miles, and while the paint continued to look good from 10 feet away, any careful inspection showed a rash of chips and scratches on the GT’s front end and lower side panels.<br><br>Of course many high-end luxury and exotic car owners use a straightforward approach to keeping their vehicles in like new condition: they never drive them. That approach ensures minimal paint damage while also guaranteeing minimal enjoyment. I’m just crazy enough to want to drive my cars, even the rare and expensive ones.<br><br>Last year I purchased a 2018 Dodge Challenger SRT Demon, one of 3,300 special Challengers offered for just one year and at a price approaching $100,000. These car’s include an 840 horsepower V8 engine and the ability to pull 0-to-60 in 2.3 seconds. I ordered my Demon with the “Satin Graphics Package”, which includes a matte finish on the hood, roof and trunk lid. The matte finish against the bright Tor Red paint looks fantastic. It also creates high levels of anxiety for anyone who understands how delicate these matte finishes can be. If you scratch matte paint you can’t easily fix it because rubbing out the scratch will rub out the matte finish, creating a shiny section in the middle of the matte panel.<br><br>My anxiety over the Demon’s delicate paint pushed me into finally giving paint protection film a try. I asked a local detailing shop, Envious Detailing in Orange, California, to install the film. Envious Detailing specializes in high-end automotive services, including paint repair, color correction, clear bra (PPF) installation, ceramic coatings and window tinting. The shop performed all of these services on my Demon, including ceramic coating on the paint protection film after it was installed, ceramic coating on the wheels, window tinting and a windshield ClearPlex film to protect the glass against pitting.<br><br>It’s been just over a year since I had those services performed, and I’m thrilled with the result. The paint protection film has kept my Demon’s paint looking brand new, and the ceramic coating on the film and wheels makes cleaning the car a breeze. Everything from splattered bugs to bird droppings to brake dust wipes off easily. My stress level when driving the Demon (or squeezing past it in my cramped garage) is substantially lower because I know the PPF is there, giving my paint an extra layer of protection against chips and scratches.<br><br>My satisfaction with the Demon’s paint protection film led me back to Envious Detailing when my 2019 Ford GT arrived in mid-January. I asked for the same full body treatment, then added a PPF wrap underneath the car to protect the GT’s carbon fiber underbody panels. As with the Demon, Envious Detailing polished the factory paint to remove any scratches before installing the protective film. This was followed by a ceramic coating of the PPF and the GT’s carbon fiber wheels, plus tinting the side windows and adding a ClearPlex windshield film. The latter is particularly helpful because the Ford GT’s low windshield is prone to rock chips. An in-depth video of my Ford GT’s paint protection process is available on the Envious Detailing website.<br><br>As you might expect, this kind of specialized, full body paint protection doesn’t come cheap. Some people only apply the film to forward facing surfaces, as these are the most likely to be damaged by flying rocks. Limiting the paint protection film to forward-facing surfaces definitely lowers the cost. But I like knowing my car’s side panels are protected from door dings, metal buttons and belt buckles, whether parked in my garage or attending a local Cars & Coffee. The same goes for the hood, roof and trunk — I like knowing these are protected from bird droppings, a sudden hail storm (yes, that happened to me in my 2005 Ford GT) and long-term UV exposure.<br><br>If you own, or plan to buy, a high-end vehicle I would suggest getting your vehicle wrapped in paint protection film. The technology has come a long way in recent years, making the films durable enough to last between 5 and 10 years without yellowing, bubbling or leaving a residue on your paint when it is removed. I only wish today’s PPF technology had been around when I bought my first Ford GT in August of 2005.</p>',
            'thumbnail' => 'forbes_1.jpg',
        ]);

        $x = 1;
        for ($i = 0; $i < 3; $i++) {
            BlogGallery::create([
                'blog_id' => $blog->id,
                'type' => 'photos',
                'files' => 'forbes_' . $x++ . '.jpg'
            ]);
        }

        /*foreach (BlogCategory::all() as $category) {
            for ($i = 0; $i < 9; $i++){
                $title = $faker->words(rand(2, 3), true);
                $files = [
                    $faker->imageUrl(800, 600, 'transport'),
                    $faker->imageUrl(800, 600, 'transport'),
                    $faker->imageUrl(800, 600, 'transport'),
                    $faker->imageUrl(800, 600, 'transport'),
                    $faker->imageUrl(800, 600, 'transport'),
                ];

                Blog::create([
                    'user_id' => rand(User::where('role', Role::ADMIN)->min('id'), User::where('role', Role::ADMIN)->max('id')),
                    'category_id' => $category->id,
                    'title' => strtoupper($title),
                    'title_uri' => preg_replace("![^a-z0-9]+!i", "-", strtolower($title)),
                    'content' => '<p align="justify">' . $faker->paragraphs(rand(3, 5), true) . '</p>',
                    'thumbnail' => $faker->imageUrl(800, 600, 'transport'),
                    'files' => $files,
                ]);
            }
        }*/
    }
}
