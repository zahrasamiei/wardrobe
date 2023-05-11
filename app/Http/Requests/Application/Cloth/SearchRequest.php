<?php

namespace App\Http\Requests\Application\Cloth;

use App\Http\Requests\IndexSearchRequest;
use App\Rules\SearchColumnRule;
use App\Traits\ResponseApi;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class SearchRequest extends FormRequest
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
        $formRequests = [
            IndexSearchRequest::class
        ];

        $rules = [
            "name" => ["string", "nullable"],
            "category_id" => ["numeric", "nullable", "exists:categories,id"],
            "color_id" => ["numeric", "nullable", "exists:colors,id"],
            "occasion_id" => ["numeric", "nullable", "exists:occasions,id"],
            "season_id" => ["numeric", "nullable", "exists:seasons,id"],
        ];

        foreach ($formRequests as $source) {
            $rules = array_merge(
                $rules,
                (new $source)->rules("clothes")
            );
        }

        return $rules;
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
