<?php

namespace App\Http\Requests\Productos;

use Illuminate\Foundation\Http\FormRequest;

class EditProductosRequest extends FormRequest
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
            'nombre' => 'required|string|min:5|max:20',
            'descripcion' => 'required|string|min:5|max:20',
            'categoria_id' => 'required|numeric|exists:categorias,id',
            'precio' => 'required|integer|min:1|max:99999',
            'stock' => 'required|integer|min:1|max:99999',
            'imagen' => 'nullable|image|mimes:jpeg,jpg,png|max:15000'
        ];
    }
}
