<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'name'=>'string|required|max:255',
        'ci'=>'string|required|unique:clients|min:8|max:8',
        'phone'=>'string|required|unique:clients|min:9|max:9',
        'adress'=>'string|required|max:255',
        'email'=>'string|required|email|unique:clients|max:255|email:rfc,dns',
        ];
    }public function messages(){
  
     
  
        return [
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permite 50 caracteres',
    
    
           
            'ci.string'=>'El valor no es correcto',
            'ci.max'=>'Solo se permite 8 caracteres',
            'ci.min'=>'Solo se require 8 caracteres',
            'ci.unique'=>'Esta cedula ya se encuentra registrada',
            'ci.required'=>'Este campo es requerido',
            
            'phone.string'=>'El valor no es correcto',
            'phone.max'=>'Solo se permite 9 caracteres',
            'phone.min'=>'Solo se require 9 caracteres',
            'phone.unique'=>'Esta celular ya se encuentra registrado',
            'phone.required'=>'Este campo es requerido',

            'adress.required'=>'Este campo es requerido',
            'adress.string'=>'El valor no es correcto',
            'adress.max'=>'Solo se permite 255 caracteres',
            
            'email.string'=>'El valor no es correcto',
            'email.max'=>'Solo se permite 255 caracteres',
            'email.email'=>'Este correo no es valido',
            'email.unique'=>'Esta celular ya se encuentra registrado',
            'email.required'=>'Este campo es requerido',

        ];
    }
}
