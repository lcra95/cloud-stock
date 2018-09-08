<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SucursalRequest extends Request
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
            'name'=>'required|min:4|max:100',
            'siicode'=>'required|unique:sucursals',
            'email'=>'required|min:4|max:250|',
            'telephone'=>'required|min:9',
            'direction'=>'required',
            'contact'=>'required|max:40|min:4'
        ];
    }
}
