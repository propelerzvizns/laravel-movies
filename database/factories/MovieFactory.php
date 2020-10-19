<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text('40'),
            'director' => $this->faker->name,
            'imageUrl' => 'https://d1nhio0ox7pgb.cloudfront.net/_img/o_collection_png/green_dark_grey/512x512/plain/film.png',
            'duration' => $this->faker->numberBetween(3,300),
            'releaseDate' => $this->faker->date('Y-m-d', 'now'),
            'genre' => $this->faker->word,
        ];
    }
}
