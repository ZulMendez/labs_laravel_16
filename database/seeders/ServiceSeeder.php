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
                'titre' => 'GET IN THE LAB AND SEE THE SERVICES', 
                'icone' => 'flaticon-023-flask',
                'soustitre' => 'Get in the lab',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => 'GET IN THE LAB AND DISCOVER THE WORLD', 
                'icone' => 'flaticon-011-compass',
                'soustitre' => 'Projects online', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-037-idea',
                'soustitre' => 'SMART MARKETING', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-039-vector',
                'soustitre' => 'Social Media', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-036-brainstorming',
                'soustitre' => 'Brainstorming', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-026-search',
                'soustitre' => 'Documented', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-018-laptop-1',
                'soustitre' => 'Responsive', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-043-sketch',
                'soustitre' => 'Retina ready', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-012-cube',
                'soustitre' => 'Ultra modern', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-002-caliper',
                'soustitre' => 'Tech', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-019-coffee-cup',
                'soustitre' => 'Retina ready', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-011-compass',
                'soustitre' => 'Brand development', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-020-creativity',
                'soustitre' => 'Creation & execution', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-039-vector',
                'soustitre' => 'Communication', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-025-imagination',
                'soustitre' => 'Marketing plan', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-026-search',
                'soustitre' => 'Management & reporting', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-012-cube',
                'soustitre' => 'Campaign', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-008-team',
                'soustitre' => 'Online marketing', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-036-brainstorming',
                'soustitre' => 'INNOVATION', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'titre' => '', 
                'icone' => 'flaticon-043-sketch',
                'soustitre' => 'Conversational Marketing', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
        ]);
    }
}
