<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Livro;
use App\Models\User;

class LivroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tipos = Livro::tipos();
        return [
            'titulo'=>$this->faker->sentence(3),
            'isbn'=>$this->faker->ean13(),
            'autor'=>$this->faker->name,    
            'preco'=>$this->faker->randomDigit(),
            'resumo'=>$this->faker->sentence(100),        
            'user_id'=>User::factory()->create()->id,
            'tipo'=>$tipos[array_rand($tipos)]
        ];
    }
}
