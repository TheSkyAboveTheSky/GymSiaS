<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SalleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'salle_name'=>'Mwanj',
/*             'admin_id'=>1, */
            'adresse'=>'casablanca',
            'user_id'=>1,
        ];
    }
}
