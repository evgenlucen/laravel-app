<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6,true);
        $slag = Str::substr(Str::lower(preg_replace('/\s+/','-',$title)),0,-1);

        return [
            'title' => $title,
            'body' => $this->faker->paragraph(108,true),
            'slug' => $slag,
            'img' => 'https://via.placeholder.com/688/5F1138/FFFFFF/?text=XXL',
            'created_at' => $this->faker->dateTimeBetween('-1 years')
        ];
    }
}
