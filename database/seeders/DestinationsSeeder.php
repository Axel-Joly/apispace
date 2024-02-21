<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            [
                'en_name' => "moon",
                'fr_name'=>"lune",
                'image' => "/img/moon.png",
                'en_description'=>"See our planet like you've never seen it before. A perfect relaxing journey to help you unwind and come back rejuvenated. While you're there, immerse yourself in history by visiting the landing sites of Luna 2 and Apollo 11.",
                'fr_description'=>"Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué. Pendant que vous y êtes, plongez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",
                'en_distance' => "384 000 km",
                'fr_distance' => "384 000 km",
                'en_duration' => "3 days",
                'fr_duration' => "3 jours",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'en_name' => 'mars',
                'fr_name' => 'mars',
                'image' =>"/img/mars.png",
                'en_description' => "Don't forget your hiking boots. You'll need them to climb Olympus Mons, the tallest planetary mountain in our solar system. It's twice and a half the size of Everest!",
                'fr_description' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest!",
                'en_distance' => "225 million km",
                'fr_distance' => "225 million km",
                'en_duration' => "9 months",
                'fr_duration' => "9 mois",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'en_name' => 'europa',
                'fr_name'=>'europe',
                'image' => "/img/europa.png",
                'en_description' => "The smallest of Jupiter's four Galilean moons, Europa is a winter lover's dream. Its icy surface is perfect for a bit of ice skating, curling, hockey, or just relaxing in your cozy winter cottage.",
                'fr_description' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détendre dans votre confortable chalet hivernal.",
                'en_distance' => "628 million km",
                'fr_distance' => "628 million km",
                'en_duration' => "3 years",
                'fr_duration' => "3 ans",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'en_name' => 'titan',
                'fr_name' => 'titan',
                'image' => "/img/titan.png",
                'en_description' => "The only known moon to have a dense atmosphere other than Earth, Titan is like a home away from home (just a few hundred degrees colder!). As a bonus, you can gaze at stunning views of Saturn's rings.",
                'fr_description' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la maison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contempler des vues saisissantes des anneaux de Saturne.",
                'en_distance' => "1.6 billion km",
                'fr_distance' => "1.6 milliard km",
                'en_duration' => "7 years",
                'fr_duration' => "7 ans",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
