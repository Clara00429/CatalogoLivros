<?php

namespace Database\Factories;

use App\Models\Livro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroFactory extends Factory
{
    protected $model = Livro::class;

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'autor' => $this->faker->name,
            'editora' => $this->faker->company,
            'ano' => $this->faker->year,
            'paginas' => $this->faker->numberBetween(100, 600),
            'imagem' => 'placeholder.jpg',
            'status' => 'quero ler',
            'favorito' => false,
        ];
    }
}
