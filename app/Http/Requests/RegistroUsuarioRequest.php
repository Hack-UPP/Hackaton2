<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return (Auth::user() == NULL);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {        
        $this->rol = intval($this->rol);
        $validado = [
            'nombre' => 'required|max:60|min:4',
            'email' => 'required|email|max:60|min:6|unique:usuarios',
            'password' => 'required|min:6|confirmed',
            'rol' => 'required|notin:1|exists:roles,id',
            'telefono' => 'require|digits:10',
            'telefono2' => 'require|digits:10',
            'direccion' => 'required|min:15|max:255'
        ];
        /// /// //
        if ($this->rol === 2) { //estudiante
            $validado = array_merge($validado, [
                'apellido_paterno'=>'required|min:3|max:60',
                'apellido_materno'=>'required|min:3|max:60',
                'datos_escolares'=>'required|min:20|max:255',
                'edad'=>'required|numeric|min:5|max:100',
                'sexo'=>'required|in:H,M' //hombre/mujer
            ]);
        }
        else if ($this->rol === 3) { //empresa
            $validado = array_merge($validado, [
                'rfc'=>'required|min:3|max:60'
            ]);
        }
        else if ($this->rol === 4) { //experto
            $validado = array_merge($validado, [
                'edad'=>'required|numeric|min:5|max:100',
                'sexo'=>'required|in:H,M' //hombre/mujer
            ]);
        }
        // validaciones //
        return $validado;        
    }
}
