<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'surname' => $this->faker->lastName, 
            'cellphone'=>$this->faker->phoneNumber,
            'id_number' => rand(100000,9999999),  
            'email' => $this->faker->unique()->safeEmail,        
        ];
    }
}
