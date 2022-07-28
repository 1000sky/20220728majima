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
            'gender' => $this->faker->randomElement($array = ['男性', '女性']),
            'email' => $this->faker->safeEmail, 
            'postcode' =>substr_replace($this->$faker->postcode, '-', 3, 0),
            'address' =>$this->faker->prefecture,
            'address' =>$this->faker->streetAddress,
            'building-name' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->realText（120）,
        ];
    }
}

