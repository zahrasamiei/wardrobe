<?php

namespace App\Http\Requests;

use App\Http\Requests\Blog\CreateRequest;
use App\Rules\ColumnExistRule;
use App\Traits\ResponseApi;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use function getModelColumns;

class IndexSearchRequest extends FormRequest
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
    public function rules($table = null)
    {
        return [
            'search' => ['nullable', 'string'],
            'limit' => ['nullable', 'numeric', 'gt:0'],
            'page' => ['nullable', 'numeric', 'gt:0'],
            'orderColumn' => ['nullable', 'string', new ColumnExistRule(getModelColumns($table ?? getTableFromRequest($this->getRequestUri())))],
            'orderDir' => ['nullable', 'in:asc,desc']
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
