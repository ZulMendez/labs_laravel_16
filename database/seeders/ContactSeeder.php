<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                "titre" =>  "Contact us",
                "description" =>  "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
                "soustitre"  =>  "Main Office",
                "adresse" =>  "C/ Libertad, 34",
                "adresse2" =>  "05200 Arévalo",
                "tel" =>  "0034 37483 2445 322",
                "email" =>  "hello@company.com",
                "position" => "40.801485408197856, -73.96745953467104", 
                "footer" => "All rights reserved. Designed by <a href='#'>Colorlib</a>",
                "created_at" =>  now(),
            ],
        ]);
    }
}
