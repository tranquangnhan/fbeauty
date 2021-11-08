<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LieuTrinh extends FormRequest
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
            'id' => 'required|integer',
            'idkhachhang' => 'required|integer',
            'ngaybatdau'=>'date|after:today',
            'dukienketthuc'=>'date|after:today',
        ];
    }


    public function messages() {
        return [
            'id.required' => 'Bạn chưa chọn id nhân viên',
            'id.integer' => 'Id nhân viên phải là số',
            'idkhachhang.required' => 'Bạn chưa chọn id khách hàng',
            'idkhachhang.integer' => 'Id khách hàng phải là số',
            'ngaybatdau.date' => 'Ngày bắt đầu phải định dạng ngày tháng',
            'ngaybatdau.after' => 'Ngày bắt đầu phải là tương lai',
            'dukienketthuc.date' => 'Ngày bắt đầu phải định dạng ngày tháng',
            'dukienketthuc.after' => 'Dự kiến kết thúc phải là tương lai',
           
        ];
    }

    public function attributes(){
        return [
            
            'id'=>'Id nhân viên',
            'idkhachhang'=>'Id khách hàng',
            'ngaybatdau'=>'Ngày bắt đầu ',
            'dukienketthuc'=>'Dự kiến kết thúc',
            'ghichu'=>'Ghi chú',
        ];
    }


}
