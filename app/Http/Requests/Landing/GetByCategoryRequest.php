<?php

namespace App\Http\Requests\Landing;

use App\Rules\CheckFileExistRule;
use App\Traits\ResponseApi;
use Illuminate\Contracts\Validation\Validator;
use App\Rules\ValidImage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class GetByCategoryRequest extends FormRequest
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
            'category' => ["required", "string"],
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
