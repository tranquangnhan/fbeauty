<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPham extends FormRequest
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
            'iddanhmuc' => ['required','integer'],
            'name' => ['required','min:3','max:100'],
            'mota' => ['required','min:3'],
            'noidung'=>['required'],
            'trangthai'=>['integer'],
        ];
    }

    public function messages()
    {
        return [
            'iddanhmuc.required' => 'Bạn chưa chọn danh mục',
            'iddanhmuc.integer' => 'Danh mục phải là số',
            'name.required' => 'Bạn phải nhập tên sản phẩm',
            'name.min' => 'Tên sản phẩm phải trên 3 kí tự',
            'name.max' => 'Tên sản phẩm phải dướI 100 kí tự',
            'mota.required' => 'Mô tả bắt buộc nhập',
            'mota.min' => 'Mô tả phải trên 3 kí tự',
            'noidung.required' => 'Nội dung bắt buộc nhập',
            'trangthai.integer' => 'Trạng thái phải là số nguyên',
        ];
    }

    public function attributes()
    {
        return [
            'iddanhmuc' => 'id danh mục',
            'name' => 'Tên sản phẩm',
            'mota' => 'Mô tả sản phẩm',
            'noidung'=> 'Nội dung sản phẩm',
            'trangthai'=>'Trạng thái sản phẩm',
            'img'=>'Ảnh sản phẩm',
        ];
    }
}
