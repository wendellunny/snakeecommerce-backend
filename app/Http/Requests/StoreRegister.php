<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegister extends FormRequest
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
            'login' => 'required|unique:tb_user,login|min:3|max:15',
            'passwordhash' => ['required','min:8','max:15'],
            'fullname' => ['required','min:3','max:50'],
            'cpf' => ['required','min:11','max:14','cpf']

        ];
    }


    public function messages(){
        return [
            "required" => "Este campo é obrigatório",
            "min" => "Este campo requer pelo menos :min caracteres",
            "max" => "Este campo requer no maximo :max caracteres",
            "unique" => "Usuário indisponível"
        ];   
    }
}
