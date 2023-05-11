<?php

namespace App\Rules;

use App\Traits\UploadFile;
use Illuminate\Contracts\Validation\Rule;

class CheckFileExistRule implements Rule
{
    use UploadFile;

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
        if (is_array($value)) {
            foreach ($value as $item) {
                if ($this->checkFileExists($item) == "no") return false;
            }
            return true;
        }
        return $this->checkFileExists($value) == "yes";
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
