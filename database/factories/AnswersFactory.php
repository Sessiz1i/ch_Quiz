<?php

namespace Database\Factories;

use App\Models\Answers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AnswersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Answers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(3,10),
            'question_id' => rand(1,100),
            'answer' => 'answer'.rand(1,4),
        ];
    }
}
