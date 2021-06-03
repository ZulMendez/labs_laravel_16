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
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-011-compass',
                'titre' => 'Projects online', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-037-idea',
                'titre' => 'SMART MARKETING', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-039-vector',
                'titre' => 'Social Media', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-036-brainstorming',
                'titre' => 'Brainstorming', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-026-search',
                'titre' => 'Documented', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-018-laptop-1',
                'titre' => 'Responsive', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-043-sketch',
                'titre' => 'Retina ready', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-012-cube',
                'titre' => 'Ultra modern', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-002-caliper',
                'titre' => 'Tech', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-019-coffee-cup',
                'titre' => 'Retina ready', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-011-compass',
                'titre' => 'Brand development', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-020-creativity',
                'titre' => 'Creation & execution', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-039-vector',
                'titre' => 'Communication', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-025-imagination',
                'titre' => 'Marketing plan', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-026-search',
                'titre' => 'Management & reporting', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-012-cube',
                'titre' => 'Campaign', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-008-team',
                'titre' => 'Online marketing', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-036-brainstorming',
                'titre' => 'INNOVATION', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
            [
                'icone' => 'flaticon-043-sketch',
                'titre' => 'Conversational Marketing', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'created_at' => now(),
            ],
        ]);
    }
}
