<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'icone' => 'flaticon-023-flask',
                'titre' => 'Get in the lab', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-011-compass',
                'titre' => 'Projects online', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-037-idea',
                'titre' => 'SMART MARKETING', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-039-vector',
                'titre' => 'Social Media', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-036-brainstorming',
                'titre' => 'Brainstorming', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-026-search',
                'titre' => 'Documented', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-018-laptop-1',
                'titre' => 'Responsive', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-043-sketch',
                'titre' => 'Retina ready', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-012-cube',
                'titre' => 'Ultra modern', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-018-laptop-1',
                'titre' => 'Tech', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-043-sketch',
                'titre' => 'Retina ready', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-011-compass',
                'titre' => 'Brand development', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-023-flask',
                'titre' => 'Creation & execution', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-039-vector',
                'titre' => 'Communication', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-037-idea',
                'titre' => 'Marketing plan', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-026-search',
                'titre' => 'Management & reporting', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-012-cube',
                'titre' => 'Campaign', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-043-sketch',
                'titre' => 'Online marketing', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-036-brainstorming',
                'titre' => 'INNOVATION', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-043-sketch',
                'titre' => 'Conversational Marketing', 
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
        ]);
    }
}
