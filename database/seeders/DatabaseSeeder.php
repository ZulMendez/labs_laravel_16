<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\ContactSujet;
use App\Models\Newsletter;
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
            UserSeeder::class,

            CarouselSeeder::class,
            VideoSeeder::class,
            LogoSeeder::class,
            TestimonialSeeder::class,
            TeamSeeder::class,
            ReadySeeder::class,
            ServiceSeeder::class,
            DiscoverSeeder::class,
            ArticleSeeder::class, 
            // CommentSeeder::class,
            CategorieSeeder::class,
            BlogSeeder::class,
            TagSeeder::class,
            BlogtagSeeder::class,
            TitreSeeder::class, 
            ContactSeeder::class,
            ContactSujetSeeder::class,
        ]);

        Comment::factory()->count(6)->create(); 
    }
}
