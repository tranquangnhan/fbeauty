<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachHang extends FormRequest
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
            'name' => ['required', 'min:3', 'max:25'],
            'email' => ['required', 'min:3', 'max:30', 'email'],
            'password' => ['required', 'min:6', 'max:25'],
            'sdt' => ['required','regex:/^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/'],
            // 'img'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tên khách hàng',
            'name.min' => 'Tên khách hàng phải lớn hơn 3 kí tự',
            'name.max' => 'Tên khách hàng phải nhỏ hơn 25 kí tự',
            'email.required' => 'Bạn chưa nhập email',
            'email.min' => 'Email phải lớn hơn 3 kí tự',
            'email.max' => 'Email phải nhỏ hơn 30 kí tự',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải lớn hơn 6 kí  tự',
            'password.max' => 'Mật khẩu phải nhỏ hơn 25 kí tự',
            'sdt.required' => 'Bạn chưa nhập số điện thoại',
            'sdt.regex' => 'Số điện thoại không đúng định dạng',
            // 'img.required' => 'Bạn chưa cập nhật img ',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên khách hàng',
            'email' => 'Email khách hàng',
            'password' => 'Mật khẩu',
            'sdt' => 'Số điện thoại',
            // 'img'=>'img khách hàng'
        ];
    }
}
