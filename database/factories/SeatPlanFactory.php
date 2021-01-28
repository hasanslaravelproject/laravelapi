<?php

namespace Database\Factories;

use App\Models\SeatPlan;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeatPlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SeatPlan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class_wise_seat_qty' => $this->faker->text(255),
            'seat_quantity' => $this->faker->randomNumber(0),
        ];
    }
}
