<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Status::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'hash'=>Str::random(32),
            'body'=>$this->faker->sentence(),
            'user_id'=>rand(4,7),
        ];
    }
}
