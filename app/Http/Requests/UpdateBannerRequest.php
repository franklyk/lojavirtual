<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBannerRequest extends FormRequest
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
            'img_background' => ['required' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp'],
            'img_banner' => ['required' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp'],
            'title' => ['required' => 'min:3'],
            'description' => ['required'],
        ];
    }
}
