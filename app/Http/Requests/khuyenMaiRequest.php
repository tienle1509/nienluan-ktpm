<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class khuyenMaiRequest extends FormRequest
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
            'txtTieuDe'=>'required',
            'txtngayBD'=>'required',
            'txtngayKT'=>'required|after:txtngayBD',  //ngày kết thúc phải sau ngày bắt đầu
            'txtChietKhau'=>'required|numeric',
            'txtNoiDung'=>'required',
            'txtLoaiPhong'=>'required',
        ];
    }

    public function messages(){
        return[
            'txtTieuDe.required'=>'Tiêu đề không được trống',
            'txtngayBD.required'=>'Ngày bắt đầu không được trống',
            'txtngayKT.required'=>'Ngày kết thúc không được trống',
            'txtngayKT.after'=>'Ngày kết thúc phải lớn hơn ngày bắt đầu',
            'txtChietKhau.required'=>'Chiết khấu không được trống',
            'txtChietKhau.numeric'=>'Trường này không được nhập kí tự',
            'txtNoiDung.required'=>'Nội dung không được trống',
            'txtLoaiPhong.required'=>'Chọn ít nhất một loại phòng để áp dụng'
        ];
    }
}
