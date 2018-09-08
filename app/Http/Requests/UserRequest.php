<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'name'=>'min:4|max:80|required',
            'email'=>'unique:users|required|max:200|min:4',
            'telephone'=>'min:9|required',
            'direction'=>'required|max:200',
            'password'=>'min:4|max:12|required|',
            'rols_id'=>'required'
        ];
    }
}
