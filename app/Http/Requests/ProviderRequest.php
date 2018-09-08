<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProviderRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:100|min:4|',
            'rut'=> 'unique:providers|min:10|max:10|required',
            'email'=>'required|min:4|max:250|',
            'telephone'=>'required|min:9',
            'direction'=>'required'
        ];
    }
}
