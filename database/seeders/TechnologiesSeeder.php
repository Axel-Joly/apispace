<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('technologies')->insert([
            [
                'en_name' => 'the launcher',
                'fr_name'=> 'le lanceur',
                'en_description' => "A launcher or a carrier rocket is a rocket-propelled vehicle used to transport a payload from Earth's surface into space, usually to Earth orbit or beyond. Our WEB-X rocket is the most powerful in service. Standing at 150 meters in height, it provides an impressive spectacle on the launch pad!",
                'fr_description' =>"Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
                'image' => "/img/launcher.png",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'en_name' => 'the spaceport',
                'fr_name' => 'le spatioport',
                'en_description' => "A spaceport or cosmodrome is a launch (or reception) site for spacecraft, by analogy with the seaport for ships or the airport for aircraft. Based at the famous Cape Canaveral, our spaceport is ideally located to take advantage of Earth's rotation for launch.",
                'fr_description' =>"Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.",
                'image' => "/img/spatioport.png",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'en_name' => 'the space capsule',
                'fr_name' => 'la capsule spatial',
                'en_description' => "A space capsule is a habitable spacecraft that uses a blunt-body capsule to reenter Earth's atmosphere without wings. Our capsule is where you'll spend your time during the flight. It includes a gym, a cinema, and many other activities to entertain you.",
                'fr_description' =>"Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir.",
                'image' =>"/img/capsule.png",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
