<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntradaFormRequest extends FormRequest
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
            'titulo'=>'required|unique:entradas|min:6|max:255',
            'contenido'=>'required|min:50'
        ];
    }
    public function messages(){
        return [
            'titulo.required'=>'Usuario, el :attribute es obligatorio.'
        ];
    }
}
