<?php

namespace Database\Seeders;

use App\Mail\RegisterSender;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use stdClass;

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
                'nom' => 'Admin',
                'img' => 'img/profil_defaut.jpg',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('testhello'),
                'role_id' => 1,
                'genre_id' => 2,
                'poste_id' => 1,
                "validate" => 1,
                'created_at' => now(),
            ],
            [
                'nom' => 'Méndez',
                'img' => 'img/team/1.jpg',
                'email' => ' zulM@gmail.com',
                'password' => Hash::make('hello'),
                'role_id' => 2,
                'genre_id' => 1,
                'poste_id' => 2,
                "validate" => 1,
                'created_at' => now(),
            ],
            [
                'nom' => 'Redacteur',
                'img' => 'img/team/3.jpg',
                'email' => 'redacteur@gmail.com',
                'password' => Hash::make('testhello2'),
                'role_id' => 3,
                'genre_id' => 2,
                'poste_id' => 3,
                "validate" => 1,
                'created_at' => now(),
            ],
            [
                'nom' => 'Membre1',
                'img' => 'img/team/2.jpg',
                'email' => 'membre@gmail.com',
                'password' => Hash::make('testhello3'),
                'role_id' => 4,
                'genre_id' => 1,
                'poste_id' => 4,
                "validate" => 0,
                'created_at' => now(),
            ],
        ]);
    }
}