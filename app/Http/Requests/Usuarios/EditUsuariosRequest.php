<?php

namespace App\Http\Requests\Usuarios;

use Illuminate\Foundation\Http\FormRequest;

class EditUsuariosRequest extends FormRequest
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
            'nick' => 'required|string|min:5|max:25',
            'nivel' => 'required|numeric|exists:niveles,id',
            'nombre' => 'required|string|min:3|max:50',
            'apellido' => 'required|string|min:3|max:25',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:5|max:25',
        ];
    }
}
