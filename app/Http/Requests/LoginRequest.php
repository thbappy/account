<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email_or_mobile' => ['required', 'string', 'max:255'],
            'password'        => ['required', 'string', 'min:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'email_or_mobile.required' => 'Email or mobile is required.',
            'password.required'        => 'Password is required.',
            'password.min'             => 'Password must be at least 6 characters.',
        ];
    }
}
