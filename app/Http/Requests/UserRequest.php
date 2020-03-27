<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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

    public function rules()
    {
        return[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->id),],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'password' => ['sometimes','required','string','min:8'],
            //'passwordConfirm' => ['sometimes','required_with:password','same:password'],
            'password' => 'required_with:password_confirmation|same:password_confirmation|min:8',
            'password_confirmation' => 'required_with:password|min:8',
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"Campo nome é obrigatório",
            "email.required"=>"Campo email é obrigatório",
            "email.unique"=>"Email já existente",

            "password.required"=>"Campo senha é obrigatório",
            "*.min"=>"No mínimo 8 caracteres",
            "*.max"=>"No mínimo 255 caracteres"
        ];
    }
}
