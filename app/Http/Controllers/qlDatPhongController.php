<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class qlDatPhongController extends Controller
{
    public function qldatphong(){
        //LƯỢT ĐẶT PHÒNG MỚI
    	$ds_datphongmoi = DB::table('chitiet_datphong')
    						->join('khach_hang','khach_hang.makh','=', 'chitiet_datphong.makh')
    						->where('chitiet_datphong.xacnhan',0)
                            ->paginate(10); //Phân trang
        //ĐẾM SỐ LƯƠT PHÒNG CHƯA XÁC NHẬN
    	$num_chuaxacnhan = count($ds_datphongmoi);

        //TẤT CẢ LƯỢT ĐẶT PHÒNG
        $ds_tatcaluotdatphong = DB::table('chitiet_datphong')
                            ->join('khach_hang','khach_hang.makh','=', 'chitiet_datphong.makh')
                            ->paginate(10); //Phân trang
        //ĐẾM TẤT CẢ LƯỢT ĐẶT PHÒNG
        $num_all = count($ds_tatcaluotdatphong);

    	return view('quanli.qldatphong')->with('ds_datphongmoi',$ds_datphongmoi)->with('num_chuaxacnhan',$num_chuaxacnhan)->with('tatcaluotdatphong',$ds_tatcaluotdatphong)->with('num_all',$num_all);
    }   

    public function xacNhan(){
    	//LƯỢT ĐẶT PHÒNG MỚI
        $ds_datphongmoi = DB::table('chitiet_datphong')
                            ->join('khach_hang','khach_hang.makh','=', 'chitiet_datphong.makh')
                            ->where('chitiet_datphong.xacnhan',0)
                            ->paginate(10); //Phân trang
        //ĐẾM SỐ LƯƠT PHÒNG CHƯA XÁC NHẬN
        $num_chuaxacnhan = count($ds_datphongmoi);

        return view('quanli.xacnhandatphong')->with('ds_datphongmoi',$ds_datphongmoi)->with('num_chuaxacnhan',$num_chuaxacnhan);
    }

    public function chiTietDatPhong(){
        //LẤY CÁI MÃ TỪ SESSION KHI ẤN BUTTON CHỈNH SỬA
        session_start();
        $mact = $_SESSION['mact'];
        


        return view('quanli.chitietdatphong');
    }
}
