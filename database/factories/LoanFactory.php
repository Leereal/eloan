<?php

namespace Database\Factories;

use App\Models\Loan;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Loan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => mt_rand(1,20), 
            'amount' => $this->faker->numberBetween($min = 20, $max = 1200),
            'interest' => $this->faker->numberBetween($min = 20, $max = 1200),
            'balance' => $this->faker->numberBetween($min = 20, $max = 1200),
            'due_date' => $this->faker->dateTimeBetween('-1 months', '+1 months'),
        ];
    }
}
