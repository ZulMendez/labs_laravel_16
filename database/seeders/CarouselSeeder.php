<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            [
                'img' => 'img/01.jpg',
                'created_at' => now(),
            ],
            [
                'img' => 'img/02.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}
