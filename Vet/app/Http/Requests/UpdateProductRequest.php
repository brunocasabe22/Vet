<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'image'=>'required|dimension:min_width=100,min_height=200',
            'name'=>'string|required|unique:products,name, '.$this->route('product')->id.'|max:255',
            'sell_price'=>'required|',
            'category_id'=>'integer|required|exists:App\User\Category,id',
            'provider_id'=>'integer|required|exists:App\User\Provider,id',
    
               
      
              ];
          }
      
          public function messages(){
      
         
      
          return [
          'name.string'=>'El valor no es correcto',
          'name.required'=>'El campo es requerido',
          'name.unique'=>'El producto ya esta registrado',
          'name.max'=>'Solo se permite 255 caracteres',
    
          'image.required'=>'El campo es requerido',
          'image.dimensions'=>'Solo se permiten imagenes de 100x200 px',
          
          
          'sell_price.string'=>'El cambio es requerido',
          
    
          'category_id.integer'=>'El valor tiene que ser un entero',
          'category_id.required'=>'El campo es requerido',
          'category_id.exists'=>'La categoria no existe',
    
          'provider_id.integer'=>'El valor tiene que ser un entero',
          'provider_id.required'=>'El campo es requerido',
          'provider_id.exists'=>'La categoria no existe',
        
          ];
      }
}
