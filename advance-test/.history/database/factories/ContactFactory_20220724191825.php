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
            'email' => $this->faker->safeEmail, 
            'postcode' =>
        ];
    }
}
return [
    
    'age' => $this->faker->numberBetween(1,100),
    'nationality' =>$this->faker->country
];
'gender' => 'required',
        
        'postcode' => 'required|max:8|/^[a-zA-Z0-9\-]+$/u',
        'address' => 'required|regex:/^[a-zA-Z0-9]+$/',
        'building-name' => 'regex:/^[a-zA-Z0-9]+$/',
        'opinion' => 'required|max:120',
}