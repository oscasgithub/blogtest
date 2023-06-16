<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //Validar si el usuario tiene autorización de usar el form (componente)
        return true;
        //return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {        

        return [
            //Reglas de validación
            'name' => 'required|max:20',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ];
    }

    public function attributes(): array
    {             
        return [
            //pesonalizar mensajes de error
            'name' => 'Nombre del Curso',            
        ];
    }

    public function messages()
    {     
        
        return [
            //pesonalizar mensajes de error
            'descripcion.required' => 'Debe ingresar una descripción del curso....',            
        ];

    }


}
