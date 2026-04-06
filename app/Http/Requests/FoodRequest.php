<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'old_price' => 'nullable|numeric|min:0|gt:price',
            'description' => 'nullable|string',
            'sodium' => 'nullable|string|max:255',
            'fiber' => 'nullable|string|max:255',
            'vitamin_c' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'category.required' => 'Vui lòng chọn danh mục sản phẩm.',
            'price.required' => 'Vui lòng nhập giá sản phẩm.',
            'price.numeric' => 'Giá sản phẩm phải là một số.',
            'old_price.numeric' => 'Giá cũ phải là một số.',
            'old_price.gt' => 'Giá cũ phải lớn hơn giá khuyến mãi.',
            'image_file.image' => 'File tải lên phải là hình ảnh.',
        ];
    }
}
