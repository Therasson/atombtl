<?php

namespace Database\Factories;

use App\Models\Pos;
use Illuminate\Database\Eloquent\Factories\Factory;

class PosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sector_id' => Sector::all()->random()->id,
            'user_id' => Routing::all()->random()->id,
            'manager_name' => $this->faker->name,
            'manager_contact' => $this->faker->phoneNumber,
            'pos_type' => $this->faker->name,
            'plv'=> $this->faker->name,
            'note' => $this->faker->paragraphs(3, true),
            'etat' => 1
        ];
    }
}
