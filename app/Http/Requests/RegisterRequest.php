<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'email'      => ['required', 'email', 'unique:users,email'],
            'mobile'     => ['required', 'unique:users,mobile'],
            'password'   => ['required', 'string', 'min:6', 'confirmed'],
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'First name is required.',
            'last_name.required'  => 'Last name is required.',
            'email.required'      => 'Email is required.',
            'email.unique'        => 'Email already exists.',
            'mobile.required'     => 'Mobile number is required.',
            'mobile.unique'       => 'Mobile number already exists.',
            'password.required'   => 'Password is required.',
            'password.confirmed'  => 'Password confirmation does not match.',
        ];
    }
}
