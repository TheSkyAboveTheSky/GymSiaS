<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\carbon;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
use Illuminate\Support\Facades\Hash;
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = User::class;
    public function definition()
    {

            $ab = $this->faker->numberBetween(0,12);
            $num = rand(-1,1);
            $date = Carbon::today()->subYears($num);
            $exp = Carbon::today()->subYears($num)->addMonths($ab);
            $sall =rand(1,12);
            return [
                'role_id'=>0,
                'name' => $this->faker->name(),
                'email' => $this->faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), 
                'remember_token' => Str::random(10),
                'duree_abonement_in_months'=>$ab,
                'date_debut_abonnement'=>$date,
                'abonnement_expired_at'=> $exp,
                'salle_id'=>$sall,
            ];
            

    }
}
