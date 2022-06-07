<?php

namespace App\Rules;

use App\Models\Seance;
use Illuminate\Contracts\Validation\Rule;


class SeanceTimeAvailabilityRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($seance = null)
    {
        $this->seance = $seance;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       return Seance::isTimeAvailable(request()->input('weekday'), $value, request()->input('end_time'), request()->input('salle_id'), request()->input('coach_id'), $this->seance);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This time is not available';
    }
}
