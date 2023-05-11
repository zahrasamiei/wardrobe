<?php

namespace App\Http\Requests\Application\Client;

use App\Rules\CheckFileExistRule;
use App\Traits\ResponseApi;
use Illuminate\Contracts\Validation\Validator;
use App\Rules\ValidImage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class AnatomyRequest extends FormRequest
{
    use ResponseApi;

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
            'gender_id' => ["required", "exists:genders,id"],
            'age' => ["nullable", "numeric", "gt:0"],
            'chest_size' => ["nullable", "numeric", "gt:0"],
            'waist_size' => ["nullable", "numeric", "gt:0"],
            'hip_size' => ["nullable", "numeric", "gt:0"],
            'collar_size' => ["nullable", "numeric", "gt:0"],
            'shoe_size' => ["nullable", "numeric", "gt:0"],
            'body_shape_id' => ["nullable", "exists:body_shapes,id"],
        ];
    }

    /**
     * if validation failed return response
     *
     * @param Validator $validator
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            $this->fail(
                implode(",", $validator->errors()->all()),
                422
            )
        );
    }
}
