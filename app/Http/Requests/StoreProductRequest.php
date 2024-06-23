<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'img_product' => ['required' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp'],
            'title_product' => ['required' => 'min:3'],
            'price_product' => ['required'],
            'cost_product' => ['required'],
            'color_product' => ['required'],
            'size_product' => ['required'],
        ];
    }
}
