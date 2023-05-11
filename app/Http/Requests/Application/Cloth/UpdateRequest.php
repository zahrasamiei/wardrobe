<?php

namespace App\Http\Requests\Application\Cloth;

use App\Rules\CheckClientIdRule;
use App\Rules\CheckFileExistRule;
use App\Rules\ValidImage;
use App\Traits\ResponseApi;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            "name" => ["string", "required_without_all:color_id,occasion_id,category_id,season_id,image"],
            "color_id" => ["numeric", "nullable", "exists:colors,id"],
            "occasion_id" => ["numeric", "nullable", "exists:occasions,id"],
            "category_id" => ["numeric", "nullable", "exists:categories,id"],
            "season_id" => ["numeric", "nullable", "exists:seasons,id"],
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
