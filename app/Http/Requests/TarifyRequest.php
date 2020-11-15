<?php

namespace App\Http\Requests;

use App\Lib\FormRequest;

class TarifyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            "rate" => 'required'
        ];
    }

    public function messages()
    {
        return [
            'rate.required' => 'Rate is required',
        ];
    }
}
