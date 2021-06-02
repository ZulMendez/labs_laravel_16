<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            GenreSeeder::class,
            PhotoSeeder::class,
            PosteSeeder::class,

            CarouselSeeder::class,
            DiscoverSeeder::class,
            LogoSeeder::class,
            ReadySeeder::class,
            VideoSeeder::class,

            ServiceSeeder::class,
            ArticleSeeder::class, 

            BlogSeeder::class,
            CategorieSeeder::class,
            TagSeeder::class,
            BlogtagSeeder::class,

            TeamSeeder::class,
            TestimonialSeeder::class,
            UserSeeder::class,
        ]);
    }
}
