<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('crews')->insert([
            [
                'name' => 'douglas hurley',
                'image' => "/img/douglas_hurley.png",
                'en_grade' => 'Commander',
                'en_description' => "Douglas Gerald Hurley is an American engineer, a former Marine Corps pilot, and a former NASA astronaut. He ventured into space for the third time as the commander of the Crew Dragon Demo-2 spacecraft.",
                'fr_grade'=>"Commandant",
                'fr_description'=>"Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Corps des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaisseau Crew Dragon Demo-2.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'mark shuttleworth',
                'image' =>"/img/mark_shuttleworth.png",
                'en_grade' => 'Mission Specialist',
                'en_description' => "Mark Richard Shuttleworth is the founder and CEO of Canonical, the company behind the Ubuntu Linux-based operating system. Shuttleworth became the first South African to travel to space as a space tourist.",
                'fr_grade'=>"Spécialiste de mission",
                'fr_description'=>"Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier Sud-Africain à voyager dans l’espace en tant que touriste spatial.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'victor glover',
                'image' => "/img/victor_glover.png",
                'en_grade' => 'Pilot',
                'en_description' => "Pilot of the first operational flight of the SpaceX Crew Dragon to the International Space Station. Glover is a commander in the United States Navy, where he pilots an F/A-18. He was a crew member of Expedition 64 and served as a systems flight engineer.",
                'fr_grade'=>"Pilote",
                'fr_description'=>"Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expedition 64 et a servi comme ingénieur de vol des systèmes de station.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'anousheh ansari',
                'image' => "/img/anousheh_ansari.png",
                'en_grade' => 'Flight Engineer',
                'en_description' => "Anousheh Ansari is an Iranian-American engineer and co-founder of Prodea Systems. Ansari was the fourth self-funded space tourist, the first self-funded woman to visit the ISS, and the first Iranian in space.",
                'fr_grade'=>"Ingenieur de vol",
                'fr_description'=>"Anousheh Ansari est une ingénieure irano-américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première Iranienne dans l'espace.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
