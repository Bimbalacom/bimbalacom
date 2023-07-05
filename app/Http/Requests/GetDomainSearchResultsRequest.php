<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetDomainSearchResultsRequest extends FormRequest
{

    public function validationData()
    {
        return $this->query();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'term' => [
                'required',
                'min:3', //TODO: Discuss on a catch-up what should be the minimal subdomain length which a tenant could own
                'max:63',
                'string',
                'regex:/^[a-z-]+$/',
            ]
        ];
    }
}
