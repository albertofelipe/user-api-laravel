<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
    }

    public function messages(): array 
    {
        return [
            'name.required' => 'Campo nome obrigatório!',
            'email.required' => 'Campo e-mail obrigatório!',
            'email.email' => 'E-mail inválido!',
            'password.required' => 'Campo senha obrigatório!',
            'password.min' => 'Senha com no mínimo 6 caracteres!'
        ];
    }
}
