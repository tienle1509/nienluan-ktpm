<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class qlDatPhongController extends Controller
{
    public function qldatphong(){
    	
    	//LẤY TRONG CSDL RA LUOT DAT PHONG MỚI VÀ ĐƯA RA CÙNG VỚI VIEW

    	return view('quanli.qldatphong'); //->with('maql',$maql)->with('ten',$name)->with('email',$email);
    }   

    public function xacNhan(){

    	//LẤY RA DỮ LIỆU LƯỢT PHÒNG CHƯA XÁC NHẬN RA

    	return view('quanli.xacnhandatphong');
    }
}
