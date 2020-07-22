<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AfiliacionRequest extends FormRequest
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
            'cedula' => 'required|min:5',
            'nombre' => 'required',
            'p_apellidos' => 'required',
            's_apellidos' => 'required',
            'direccion' => 'required',
            'barrio_id' => 'required',
            'telefono' => 'required|min:10',
            'email' => 'required|email',
            'eps_id' => 'required',
        ];
    }
}
