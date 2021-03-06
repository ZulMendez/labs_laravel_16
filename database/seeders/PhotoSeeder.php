<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [
                'url' => '1.jpg',
                'created_at' => now(),
            ],
            [
                'url' => '2.jpg',
                'created_at' => now(),
            ],
            [
                'url' => '3.jpg',
                'created_at' => now(),
            ],
            [
                'url' => '4.jpg',
                'created_at' => now(),
            ],
            [
                'url' => 'avatar/01.jpg',
                'created_at' => now(),
            ],
            [
                'url' => 'avatar/02.jpg',
                'created_at' => now(),
            ],
            [
                'url' => 'avatar/03.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}
