<?php

namespace Meteor\User\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidMobile implements Rule
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
    public function passes($attribute, $value): bool
    {
        return  preg_match('/^9[0-9]{9}$/',$value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'فرمت موبایل نامعتبر است! موبایل باید با 9 شروع شود و دارای فاصله نباشد.';
    }
}
