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
    protected $model = Salle::class;
    public function definition()
    {
        return [
            'salle_id'=>1,
            'salle_name'=>'Mwanj',
            'admin_id'=>'AD1',
            'adresse'=>'casablanca',
        ];
    }
}
