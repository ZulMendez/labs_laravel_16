<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'nom' => 'Hugo Boss',
                'photo_id' => 3,
                'poste_id' => 1,
                'created_at' => now(),
            ],
            [
                'nom' => 'Christinne Williams',
                'photo_id' => 1,
                'poste_id' => 3,
                'created_at' => now(),
            ],
            [
                'nom' => 'Marie de la Croix',
                'photo_id' => 2,
                'poste_id' => 2,
                'created_at' => now(),
            ],
            [
                'nom' => 'Julian Bertrand',
                'photo_id' => 3,
                'poste_id' => 4,
                'created_at' => now(),
            ],
            [
                'nom' => 'Anne Petersen',
                'photo_id' => 2,
                'poste_id' => 3,
                'created_at' => now(),
            ],
            [
                'nom' => 'Martin Emerson',
                'photo_id' => 3,
                'poste_id' => 2,
                'created_at' => now(),
            ],
            [
                'nom' => 'Zulma Méndez',
                'photo_id' => 4,
                'poste_id' => 2,
                'created_at' => now(),
            ],
        ]);
    }
}
