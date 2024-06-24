<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RequestUserRegister extends FormRequest
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
            'img_user' => ['required' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp'],
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'email_verified_at' => ['nullable', 'date'],
            'phone' => ['required'],
            'address' => ['required'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ];
    }
}
