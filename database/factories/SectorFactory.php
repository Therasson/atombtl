<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Sector;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sector::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'area_id' => Area::all()->random()->id,
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'etat'=> 1
        ];
    }
}
