<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
   /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->randomElement(['1','2']),
            'email' => $this->faker->safeEmail, 
            'postcode' =>substr_replace($this->faker->postcode, '-', 3, 0),/*$faker->regexify('[1-9]{3}-[0-9]{4}') */
            'address' =>$this->faker->address,
            'building_name' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->realText(120),
        ];
    }
}

