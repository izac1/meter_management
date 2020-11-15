<?php

namespace App\Http\Requests;

use App\Lib\FormRequest;

class PokazanieRequest extends FormRequest
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
            "value" => 'required',
            "type_id" => 'required',
        ];
    }

    public function messages()
    {
        return [
            'value.required' => 'Value is required',
            'type_id.required' => 'Type is required',
        ];
    }
}
