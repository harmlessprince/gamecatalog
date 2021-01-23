<?php

namespace Database\Factories;

use App\Models\Gameplay;
use App\Models\Version;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameplayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gameplay::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

      
            return [
                'version_id'    => Version::all()->random()->id,
                'multiplayer'   => $this->faker->boolean(50),
            ];
       
    }
}
