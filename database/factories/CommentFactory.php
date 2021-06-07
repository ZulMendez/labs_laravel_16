<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "auteur"     => $this->faker->name(),
            "message"    => $this->faker->text(50),
            "valide"     => 1,
            "deleted"    => 0, 
            "blog_id" => $this->faker->numberBetween(1, 3)
        ];
    }
}
