<?php

use App\Models\ColorCode;
use App\Models\ColorCategory;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Any', 'Conform Chrome', 'Gloss', 'Gloss Metallic', 'Satin', 'Satin Metallic', 'Matte', 'Matte Metallic', 'ColorFlow™', 'Extreme Texture', 'Diamond', 'Pearl'];
        foreach ($categories as $category) {
            ColorCategory::create([
                'name' => $category
            ]);
        }

        $codes = [
            // any
            [1, null, 'Gloss White Repositionable', 'MPI 1104'], [1, null, 'Gloss White Repositionable Easy Apply™', 'MPI 1104 EA'],
            [1, null, 'Gloss White', 'MPI 1105'], [1, null, 'Gloss White Easy Apply™ Repositionable Slideable', 'MPI 1105 EA RS'],
            [1, null, 'Gloss White Hi-tack Easy Apply™', 'MPI 1106 Hi-tack EA'],
            // 8 Conform Chrome
            [2, 'cc-001.png', 'Conform Chrome Silver', 'CC 001'], [2, 'cc-002.png', 'Conform Chrome Black', 'CC 002'],
            [2, 'cc-003.png', 'Conform Chrome Blue', 'CC 003'], [2, 'cc-004.png', 'Conform Chrome Red', 'CC 004'],
            [2, 'cc-005.png', 'Conform Chrome Gold', 'CC 005'], [2, 'cc-006.png', 'Conform Chrome Matte Silver', 'CC 006'],
            [2, 'cc-007.png', 'Conform Chrome Violet', 'CC 007'], [2, 'cc-008.png', 'Conform Chrome Rose Gold', 'CC 008'],
            // 26 Gloss
            [3, 'swf-g-burgundy.png', 'Burgundy', 'SW 900-475-O'], [3, 'swf-g-carmine-red.png', 'Carmine Red', 'SW 900-436-O'],
            [3, 'swf-g-soft-red.png', 'Soft Red', 'SW 900-427-O'], [3, 'swf-g-cardinal-red.png', 'Cardinal Red', 'SW 900-433-O'],
            [3, 'swf-g-red.png', 'Red', 'SW 900-415-O'], [3, 'swf-g-orange.png', 'Orange', 'SW 900-373-O'],
            [3, 'swf-g-dark-yellow.png', 'Dark Yellow', 'SW 900-249-O'], [3, 'swf-g-yellow.png', 'Yellow', 'SW 900-235-O'],
            [3, 'swf-g-ambulance-yellow.png', 'Ambulance Yellow', 'SW 900-236-O'], [3, 'swf-g-light-pistachio.png', 'Light Pistachio', 'SW 900-728-O'],
            [3, 'swf-g-lime-green.png', 'Lime Green', 'SW 900-731-O'], [3, 'swf-g-grass-green.png', 'Grass Green', 'SW 900-758-O'],
            [3, 'swf-g-dark-green.png', 'Dark Green', 'SW 900-792-O'], [3, 'swf-g-sea-breeze-blue.png', 'Sea Breeze Blue', 'SW 900-648-O'],
            [3, 'swf-g-cloudy-blue.png', 'Cloudy Blue', 'SW 900-656-O'], [3, 'swf-g-smoky-blue.png', 'Smoky Blue', 'SW 900-612-O'],
            [3, 'swf-g-light-blue.png', 'Light Blue', 'SW 900-632-O'], [3, 'swf-g-intense-blue.png', 'Intense Blue', 'SW 900-667-O'],
            [3, 'swf-g-blue.png', 'Blue', 'SW 900-677-O'], [3, 'swf-g-dark-blue.png', 'Dark Blue', 'SW 900-681-O'],
            [3, 'swf-g-indigo-blue.png', 'Indigo Blue', 'SW 900-699-O'], [3, 'swf-g-white.png', 'White', 'SW 900-101-O'],
            [3, 'swf-g-grey.png', 'Grey', 'SW 900-832-O'], [3, 'swf-g-dark-grey.png', 'Dark Grey', 'SW 900-865-O'],
            [3, 'swf-g-rock-grey.png', 'Rock Grey', 'SW 900-821-O'], [3, 'swf-g-black.png', 'Black', 'SW 900-190-O'],
            // 15 Gloss Metallic
            [4, 'swf-gm-spark.png', 'Spark', 'SW 900-419-M'], [4, 'swf-gm-passion-red.png', 'Passion Red', 'SW 900-448-S'],
            [4, 'swf-gm-fun-purple.png', 'Fun Purple', 'SW 900-568-S'], [4, 'swf-gm-sand-sparkle.png', 'Sand Sparkle', 'SW 900-255-M'],
            [4, 'swf-gm-gold.png', 'Gold', 'SW 900-215-M'], [4, 'swf-gm-radioactive.png', 'Radioactive', 'SW 900-762-M'],
            [4, 'swf-gm-bright-blue.png', 'Bright Blue', 'SW 900-646-M'], [4, 'swf-gm-dark-blue.png', 'Dark Blue', 'SW 900-653-M'],
            [4, 'swf-gm-magnetic-burst.png', 'Magnetic Burst', 'SW 900-679-M'], [4, 'swf-gm-silver.png', 'Silver', 'SW 900-803-M'],
            [4, 'swf-gm-quick-silver.png', 'Quick Silver', 'SW 900-816-M'], [4, 'swf-gm-grey.png', 'Grey', 'SW 900-807-M'],
            [4, 'swf-gm-brown.png', 'Brown', 'SW 900-929-M'], [4, 'swf-gm-eclipse.png', 'Eclipse', 'SW 900-199-M'],
            [4, 'swf-gm-black.png', 'Black', 'SW 900-192-M'],
            // 15 Satin
            [5, 'swf-s-carmine-red.png', 'Carmine Red', 'SW 900-438-O'], [5, 'swf-s-orange.png', 'Orange', 'SW 900-372-O'],
            [5, 'swf-s-yellow.png', 'Yellow', 'SW 900-226-O'], [5, 'swf-s-safari-gold.png', 'Safari Gold', 'SW 900-260-O'],
            [5, 'swf-s-khaki-green.png', 'Khaki Green', 'SW 900-712-O'], [5, 'swf-s-grass-green.png', 'Grass Green', 'SW 900-759-O'],
            [5, 'swf-s-light-blue.png', 'Light Blue', 'SW 900-633-O'], [5, 'swf-s-dark-blue.png', 'Dark Blue', 'SW 900-682-O'],
            [5, 'swf-s-awesome-orchid.png', 'Awesome Orchid', 'SW 900-502-O'], [5, 'swf-s-bubblegum-pink.png', 'Bubblegum Pink', 'SW 900-514-O'],
            [5, 'swf-s-white.png', 'White', 'SW 900-116-O'], [5, 'swf-s-white-pearl.png', 'White Pearl', 'SW 900-117-O'],
            [5, 'swf-s-grey.png', 'Grey', 'SW 900-833-O'], [5, 'swf-s-dark-basalt.png', 'Dark Basalt', 'SW 900-871-O'],
            [5, 'swf-s-black.png', 'Black', 'SW 900-197-O'],
            // 5 Satin Metallic
            [6, 'swf-sm-energetic-yellow.png', 'Energetic Yellow', 'SW 900-261-S'], [6, 'swf-sm-hope-green.png', 'Hope Green', 'SW 900-767-S'],
            [6, 'swf-sm-wave-blue.png', 'Wave Blue', 'SW 900-629-S'], [6, 'swf-sm-metallic-purple.png', 'Metallic Purple', 'SW 900-566-M'],
            [6, 'swf-sm-silver-metallic.png', 'Silver Metallic', 'SW 900-805-M'],
            // 6 Matte
            [7, 'swf-m-orange.png', 'Orange', 'SW 900-321-O'], [7, 'swf-m-khaki-green.png', 'Khaki Green', 'SW 900-711-O'],
            [7, 'swf-m-olive-green.png', 'Olive Green', 'SW 900-732-O'], [7, 'swf-m-dark-grey.png', 'Dark Grey', 'SW 900-856-O'],
            [7, 'swf-m-black.png', 'Black', 'SW 900-180-O'], [7, 'swf-m-white.png', 'White', 'SW 900-102-O'],
            // 17 Matte Metallic
            [8, 'swf-mm-cherry.png', 'Cherry', 'SW 900-444-M'], [8, 'swf-mm-garnet-red.png', 'Garnet Red', 'SW 900-472-M'],
            [8, 'swf-mm-blaze-orange.png', 'Blaze Orange', 'SW 900-371-M'], [8, 'swf-mm-brown.png', 'Brown', 'SW 900-954-M'],
            [8, 'swf-mm-yellow-green.png', 'Yellow Green', 'SW 900-243-M'], [8, 'swf-mm-apple-green.png', 'Apple Green', 'SW 900-745-M'],
            [8, 'swf-mm-frosty-blue.png', 'Frosty Blue', 'SW 900-643-M'], [8, 'swf-mm-powder-blue.png', 'Powder Blue', 'SW 900-614-M'],
            [8, 'swf-mm-blue.png', 'Blue', 'SW 900-615-M'], [8, 'swf-mm-brilliant-blue.png', 'Brilliant Blue', 'SW 900-671-M'],
            [8, 'swf-mm-night-blue.png', 'Night Blue', 'SW 900-623-M'], [8, 'swf-mm-purple.png', 'Purple', 'SW 900-565-M'],
            [8, 'swf-mm-pink.png', 'Pink', 'SW 900-520-M'], [8, 'swf-mm-silver.png', 'Silver', 'SW 900-857-M'],
            [8, 'swf-mm-anthracite.png', 'Anthracite', 'SW 900-858-M'], [8, 'swf-mm-gunmetal.png', 'Gunmetal', 'SW 900-840-M'],
            [8, 'swf-mm-charcoal.png', 'Charcoal', 'SW 900-845-M'],
            // 6 ColorFlow™
            [9, 'swf-cf-fresh-spring-gold-silver.png', 'Fresh Spring Gold/Silver', 'SW 900-252-S'], [9, 'swf-cf-rising-sun-red-gold.png', 'Rising Sun Red/Gold', 'SW 900-447-S'],
            [9, 'swf-cf-roaring-thunder-blue-red.png', 'Roaring Thunder Blue/Red', 'SW 900-552-S'], [9, 'swf-cf-rushing-riptide-cyan-purple.png', 'Rushing Riptide Cyan/Purple', 'SW 900-674674-S'],
            [9, 'swf-cf-urban-jungle-silver-green.png', 'Urban Jungle Silver/Green', 'SW 900-787-S'], [9, 'swf-cf-lightning-ridge-green-purple.png', 'Lightning Ridge Green/Purple', 'SW 900-611-S'],
            // 7 Extreme Texture
            [10, 'swf-et-brushed-bronze.png', 'Brushed Bronze', 'SW 900-933-X'], [10, 'swf-et-brushed-aluminium.png', 'Brushed Aluminium', 'SW 900-812-X'],
            [10, 'swf-et-brushed-titanium.png', 'Brushed Titanium', 'SW 900-802-X'], [10, 'swf-et-brushed-steel.png', 'Brushed Steel', 'SW 900-813-X'],
            [10, 'swf-et-brushed-black.png', 'Brushed Black', 'SW 900-193-X'], [10, 'swf-et-carbon-fiber-white.png', 'Carbon Fiber White', 'SW 900-115-X'],
            [10, 'swf-et-carbon-fiber-black.png', 'Carbon Fiber Black', 'SW 900-194-X'],
            // 6 Diamond
            [11, 'swf-diamond-red.png', 'Diamond Red', 'SW 900-426-D'], [11, 'swf-diamond-amber.png', 'Diamond Amber', 'SW 900-221-D'],
            [11, 'swf-diamond-purple.png', 'Diamond Purple', 'SW 900-587-D'], [11, 'swf-diamond-blue.png', 'Diamond Blue', 'SW 900-676-D'],
            [11, 'swf-diamond-white.png', 'Diamond White', 'SW 900-161-D'], [11, 'swf-diamond-silver.png', 'Diamond Silver', 'SW 900-878-D'],
            // 5 Pearl
            [12, 'swf-p-red.png', 'Red', 'SW 900-437-S'], [12, 'swf-p-gold-orange.png', 'Gold Orange', 'SW 900-326-S'],
            [12, 'swf-p-light-green.png', 'Light Green', 'SW 900-777-S'], [12, 'swf-p-dark-green.png', 'Dark Green', 'SW 900-796-S'],
            [12, 'swf-p-white.png', 'White', 'SW 900-109-S'],
        ];
        foreach ($codes as $code) {
            ColorCode::create([
                'category_id' => $code[0],
                'code' => $code[3],
                'name' => $code[2],
                'file' => $code[1]
            ]);
        }
    }
}
