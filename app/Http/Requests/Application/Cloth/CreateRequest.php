<?php

namespace App\Http\Requests\Application\Cloth;

use App\Rules\CheckClientIdRule;
use App\Rules\CheckFileExistRule;
use App\Traits\ResponseApi;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class CreateRequest extends FormRequest
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
            "name" => ["string", "required"],
            "color_id" => ["numeric", "required", "exists:colors,id"],
            "occasion_id" => ["numeric", "required", "exists:occasions,id"],
            "category_id" => ["numeric", "required", "exists:categories,id"],
            "season_id" => ["numeric", "required", "exists:seasons,id"],
            "image" => ['required', 'array', new CheckFileExistRule()],
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
