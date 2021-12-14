<?php

namespace Database\Factories;

use App\Models\PublicContact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = PublicContact::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'subject' => $this->faker->text(25),
            'message' => $this->faker->paragraph()
        ];
    }
}
