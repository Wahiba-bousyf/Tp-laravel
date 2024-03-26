<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre'=>$this->faker->realText($maxNbChars=10,$indexSize=2),
            'des'=>$this->faker->paragraph(),
            'type'=>$this->faker->word(),
            'ville'=>$this->faker->city(),
            'superficie'=>$this->faker->numberBetween(4,8),
            'etat'=>$this->faker->randomElement(['Neuf','Ancien']),
            'prix'=>$this->faker->randomFloat(2,100,1000),
        ];
    }
}
