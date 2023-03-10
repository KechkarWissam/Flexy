<?php

namespace App\Modules\Users\requests;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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

        return
        preg_match('%^(?:(?:\(?(?:00|\+)([1-4]\d\d|[1-9]\d?)\)?)?[\-\.\ \\\/]?)?((?:\(?\d{1,}\)?[\-\.\ \\\/]?){0,})(?:[\-\.\ \\\/]?(?:#|ext\.?|extension|x)[\-\.\ \\\/]?(\d+))?$%i', $value)

         && strlen($value) >= 9 && strlen($value) <= 14;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if (app()->getLocale()=='ar'){
            return 'حقل الهاتف غير صحيح';
        }
        return 'Le format du champ :attribute est incorrect';

    }
}
