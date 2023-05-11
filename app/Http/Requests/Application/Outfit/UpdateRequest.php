<?php

namespace App\Http\Requests\Application\Outfit;

use App\Models\Cloth;
use App\Rules\CheckBelongsToClientRule;
use App\Rules\CheckFileExistRule;
use App\Rules\ValidImage;
use App\Traits\ResponseApi;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

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
            "name" => ["string", "nullable", "required_without_all:occasion_id,season_id,bookmarked,clothes"],
            "occasion_id" => ['nullable', 'numeric', 'exists:occasions,id'],
            "season_id" => ['nullable', 'numeric', 'exists:seasons,id'],
            "bookmarked" => ["nullable", "in:0,1"],
            "clothes" => ["nullable"],
            "clothes.*" => ["nullable", "exists:clothes,id", "numeric", new CheckBelongsToClientRule(new Cloth)],
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
