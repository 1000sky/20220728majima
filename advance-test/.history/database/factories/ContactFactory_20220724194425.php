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
            'gender' => $this->faker->,
            'email' => $this->faker->safeEmail, 
            'postcode' =>substr_replace($faker->postcode, '-', 3, 0),
            'address' =>$faker->prefecture,
            'address' =>$faker->streetAddress,
            'building-name' => $faker->secondaryAddress()
        ];
    }
}
return [
    
    'age' => $this->faker->numberBetween(1,100),
    'nationality' =>$this->faker->country
];
'gender' => 'required',
        
        
        
        'building-name' => 'regex:/^[a-zA-Z0-9]+$/',
        'opinion' => 'required|max:120',
}