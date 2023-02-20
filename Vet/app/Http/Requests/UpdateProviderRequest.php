<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProviderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'name' => 'required|string|max:50',
            'email'=>'required|email|string|unique:providers,email,'.
            $this->route('provider')->id.'|max:255',
            'ci'=>'required|string|max:8|min:8|unique:providers,ci,'.
            $this->route('provider')->id.'|max:255',
            'adress'=>'nullable|string|max:255',
            'phone'=>'required|string|max:9|min:9|unique:providers,phone,'.
            $this->route('provider')->id.'|max:255',

        ];
    }

    public function messages(){
  
     
  
        return [
        'name.required'=>'Este campo es requerido',
        'name.string'=>'El valor no es correcto',
        'name.max'=>'Solo se permite 255 caracteres',
            
        'email.required'=>'Este campo es requerido',
        'email.email'=>'Un correo electronico es requerido',
        'email.string'=>'El valor no es correcto',
        'email.max'=>'Solo se permiten 255 caracteres',
        'email.unique'=>'Ya se encuentra registrado',

        'ci.required'=>'Este campo es requerido',
        'ci.string'=>'El valor no es correcto',
        'ci.max'=>'Solo se permiten 8 caracteres',
        'ci.min'=>'Se requiere 8 caracteres',
        'ci.unique'=>'Ya se encuentra registrado',
    
        'adress.string'=>'El valor no es correcto',
        'adress.max'=>'Solo se permiten 255 caracteres',

        'phone.required'=>'Este campo es requerido',
        'phone.string'=>'El valor no es correcto',
        'phone.max'=>'Solo se permiten 9 caracteres',
        'phone.min'=>'Se requiere 9 caracteres',
        'phone.unique'=>'Ya se encuentra registrado',
    
            
        ];
    }
}
