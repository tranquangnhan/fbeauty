<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Blog extends FormRequest
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
            'name' => ['required', 'min:6', 'max:120'],
            'noidung' => ['required', 'min:3'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tên bài viết',
            'name.min' => 'Tên bài viết phải lớn hơn 6 kí tự',
            'name.max' => 'Tên bài viết phải nhỏ hơn 120 kí tự',
            'noidung.required' => 'Bạn chưa nhập nội dung',
            'noidung.min' => 'Nội dung phải lớn hơn 3 kí tự',
            // 'img.required' => 'Bạn chưa chọn hình ảnh ',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên bài viết',
            'noidung' => 'Nội dung',
            // 'img'=>'hình ảnh'
        ];
    }
}
