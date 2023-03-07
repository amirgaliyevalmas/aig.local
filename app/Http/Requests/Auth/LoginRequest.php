<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|max:255|email',
            'password' => 'required',
            'active' => ''
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Поле “Логин” не заполнено',
            'password.required' => 'Поле “Пароль” не заполнено',
        ];
    }
}
