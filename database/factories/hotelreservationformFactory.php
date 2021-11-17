<?php

namespace Database\Factories;

use App\Models\hotelreservationform;
use Illuminate\Database\Eloquent\Factories\Factory;

class hotelreservationformFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = hotelreservationform::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->word,
        'address' => $this->faker->word,
        'Telephone' => $this->faker->randomDigitNotNull,
        'Email' => $this->faker->word,
        'Roomtype' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
