<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Node\Block\Paragraph;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'character_code' => $this->faker->word(),
            'date__of_creation' => $this->faker->dateTime(),
            'content' => $this->faker->paragraph(), // password
            'author' => $this->faker->name(),
        ];
    }
}
