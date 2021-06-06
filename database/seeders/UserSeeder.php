<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nom' => 'Test',
                'prenom' => 'Hello',
                'img' => 'profil_defaut.jpg',
                'email' => 'test@gmail.com',
                'password' => Hash::make('testhello'),
                'role_id' => 1,
                'genre_id' => 2,
                'poste_id' => 1,
                'created_at' => now(),
            ],
            [
                'nom' => 'Méndez',
                'prenom' => 'Zulma',
                'img' => 'profil_defaut.jpg',
                'email' => ' zulM@gmail.com',
                'password' => Hash::make('hello'),
                'role_id' => 2,
                'genre_id' => 1,
                'poste_id' => 2,
                'created_at' => now(),
            ],
            [
                'nom' => 'Test2',
                'prenom' => 'Hello2',
                'img' => 'profil_defaut.jpg',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('testhello2'),
                'role_id' => 3,
                'genre_id' => 2,
                'poste_id' => 3,
                'created_at' => now(),
            ],
            [
                'nom' => 'Test3',
                'prenom' => 'Hello3',
                'img' => 'profil_defaut.jpg',
                'email' => 'test3@gmail.com',
                'password' => Hash::make('testhello3'),
                'role_id' => 4,
                'genre_id' => 1,
                'poste_id' => 4,
                'created_at' => now(),
            ],
        ]);
    }
}
