<?php

namespace App\Http\Requests\BodyShape;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
//        return Auth::check() || Auth::guard("admin")->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            "name" => [
//                "string",
//                "required",
//                Rule::unique('genders')->ignore($this->gender->id, 'id')
//            ]
        ];
    }
}
