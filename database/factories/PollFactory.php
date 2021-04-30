<?php

namespace Database\Factories;

use App\Models\Poll;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PollFactory extends Factory
{
    protected $model = Poll::class;
    public function definition()
    {
        return [
            'title' => $this->faker->realText(50),
        ];

    }



}
