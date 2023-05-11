<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckImageBelongsToModelRule implements Rule
{
    /**
     * @var array
     */
    private $image;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($image)
    {
        $this->image = $image;
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
        return in_array($value, $this->image);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans("validation.not_found");
    }
}
