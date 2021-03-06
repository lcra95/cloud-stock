<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientEditRequest extends Request
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
            'rut'=> 'min:10|max:10|required'
        ];
    }
}
