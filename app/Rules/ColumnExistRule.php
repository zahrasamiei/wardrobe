<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ColumnExistRule implements Rule
{
    /**
     * @var array
     */
    private $columns;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($columns)
    {
        $this->columns = $columns;
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
        return in_array($value, $this->columns);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans("validation.column_not_found");
    }
}
