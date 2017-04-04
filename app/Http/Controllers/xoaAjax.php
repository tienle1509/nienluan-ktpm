<?php

namespace App\Http\Controllers;

use Request;
use App\anhdv;
use File;
use Response;
use DB;
use Validator;
use Carbon\Carbon;
use App\chitietdatphong;
use App\khachhang;
use Auth;

class xoaAjax extends Controller
{
    //Xóa ảnh hiện tại
    public function xoaAnhDV($id){
    	if(Request::ajax()){
    		//Lấy id ảnh
    		$id = (int)Request::get('idHinh');
    		$ten = anhdv::find($id);
    		if(!empty($ten)){
    			//Lấy tấm ảnh ra trong thu mục
    			$img = 'public/dichvu/'.$ten->tenanh;
    			//Xóa file ảnh trong thư mục
    			if(File::exists($img)){
    				File::delete($img);
    			}
    			//Xóa ảnh trong csdl
    			$ten->delete();
    		}
    		return Response::json(['success'=>true]);
    	}
    }

    //Xóa dịch vụ
    public function xoaDV(){
        if(Request::ajax()){
            //Lấy mã dịch vụ
            $madv = Request::get('madv');
            
            //Xóa ảnh phụ trong bảng anh_dv
            $anh_list = DB::table('anh_dv')->where('madv',$madv)->get();
            if(!empty($anh_list)){
                foreach ($anh_list as $key => $val) {
                    //Xóa ảnh phụ trong thư mục
                    $duongdan = 'public/dichvu/'.$val->tenanh;
                    if(File::exists($duongdan)){
                        File::delete($duongdan);
                    }
                    //Xóa ảnh phụ trong bảng ảnh dv
                    DB::table('anh_dv')->where('id',$val->id)->delete();
                }
            }

            //Xóa ảnh chính trong thư mục
            $anhchinh = DB::table('dich_vu')->where('madv',$madv)->first();
            $duongdan = 'public/dichvu/'.$anhchinh->anhdv;
            if(File::exists($duongdan)){
                File::delete($duongdan);
            }

            //Xóa dịch vụ trong bảng dịch vụ
            DB::table('dich_vu')->where('madv',$madv)->delete();

        return Response::json(['success'=>true]);
        }
    }

    //Xóa khuyến mãi
    public function xoaKM(Request $request){
        if(Request::ajax()){
            $makm = Request::get('makm');

            //Xóa ảnh trong thư mục public/khuyenmai
            $anhkm = DB::table('khuyen_mai')->where('makm',$makm)->first();
            $duongdan = 'public/khuyenmai/'.$anhkm->anhkm;
            if(File::exists($duongdan)){
                File::delete($duongdan);
            }

            //Xóa khuyến mãi trong bảng khuyến mãi
            DB::table('khuyen_mai')->where('makm',$makm)->delete();
            //Xóa khuyến mãi trong bảng chi tiết khuyến mãi
            DB::table('chi_tiet_km')->where('makm',$makm)->delete();

            return Response::json(['success'=>true]);
        }
    }

    //Đổi panel loại phòng khi bấm combobox
    public function doiPanel(Request $request){
        if(Request::ajax()){
            $malp = Request::get('malp');

            if(!empty($malp)){
                $list_lp = DB::table('loai_phong')->where('malp',$malp)->first();

                return Response::json([
                    'success'=>true,
                    'data'=>$list_lp
                ]);
            }
        }
    }

    //Mã khách hàng tự tăng 
    public function maKH(){
        $list_makh = DB::table('khach_hang')->select('makh')->get();
        $max = 0;
        foreach ($list_makh as $value) {
            $catchuoi = substr($value->makh, 2);
            if($catchuoi > $max)
                $max = $catchuoi;
        }
        //echo '<pre>';
        //print_r($makh);
        $so = $max+1;
        if($so < 10){
            $makh = 'KH0'.$so;
        }else{
            $makh = 'KH'.$so;
        }
        return $makh;
    }

    //Mã chi tiết đặt phòng tự tăng
    public function maCT(){
        $list_mact = DB::table('chitiet_datphong')->select('mact')->get();
        $max = 0;
        foreach ($list_mact as $value) {
            $catchuoi = substr($value->mact, 2);
            if($catchuoi > $max)
                $max = $catchuoi;
        }
        $so = $max + 1;
        if($so < 10){
            $mact = 'DP0'.$so;
        }else{
            $mact = 'DP'.$so;
        }
        return $mact;
    }


    //ĐẶT PHÒNG
    public function luuDatPhong(Request $request){
        if(Request::ajax()){
            $ngayden = Request::get('ngayden');
            $ngaydi = Request::get('ngaydi');
            $nguoilon = Request::get('nguoilon');
            $treem = Request::get('treem');
            $hoten = Request::get('hoten');
            $sdt = Request::get('sdt');
            $email = Request::get('email');
            $malp = Request::get('malp');

            $mact = $this->maCT();
            $makh = $this->maKH();
            $ngaydat = Carbon::now();

            $v = Validator::make(Request::all(),
                [
                    'hoten'=>'required',
                    'sdt'=>'required|between:10,11',
                    'email'=>'required|email',
                    'malp'=>'required'
                ],
                [
                    'hoten.required'=>'Họ tên không được trống',
                    'sdt.required'=>'Số điện thoại không được trống',
                    'sdt.between'=>'Số điện thoại không đúng',
                    'email.required'=>'Email không được rỗng',
                    'email.email'=>'Email không đúng định dạng',
                    'malp.required'=>'Loại phòng không được rỗng'
                ]);

            if($v->fails()){
                return Response::json([
                    'success'=>false,
                    'errors'=>$v->errors()->toArray()
                ]);
            }

            //Lấy danh sách phòng theo mã loại phòng khi khách chọn
            $ds_maphong = DB::table('phong')->where('malp',$malp)->where('tinhtrang',0)->get();
            //Đếm số mã phòng
            $count_macu = count($ds_maphong);

            $arr_maphong_cu = array();  //Mảng chứa mã loại phòng trong bảng phòng
            foreach ($ds_maphong as $key => $val) {
                $arr_maphong_cu[] = $val->maphong;
            }

            //Kiểm tra dữ liệu trong bảng chi tiết đặt phòng
            $ds_ctdatphong = DB::table('chitiet_datphong')->where('malp',$malp)->get();
            //Đếm số mã phòng trong bảng chi tiết đặt phòng
            $count_ma_ctdp = DB::table('chitiet_datphong')->distinct()->where('malp',$malp)->count('maphong');

            $arr_map_ctdp = array(); //Mảng chứa mã loại phòng trong bảng chi tiết đặt phòng
            foreach ($ds_ctdatphong as $key => $val) {
                $arr_map_ctdp[] = $val->maphong;
            }

            /*SO SÁNH MÃ PHÒNG CÓ SẴN VỚI MÃ PHÒNG TRONG BẢNG CHI TIẾT
              NẾU CHƯA CÓ THÌ LẤY RA
              ĐỂ THÊM HẾT TẤT CẢ CÁC PHÒNG VÀO BẢNG CHI TIẾT
              (LẤY HẾT PHÒNG TRỐNG THÊM VÔ)
            */
            if($count_ma_ctdp < $count_macu){
                foreach ($arr_maphong_cu as $val) {
                    //Không trùng thì lấy mã phòng ra
                    $trung = in_array($val, $arr_map_ctdp) ? '' : $val;
                    
                    if($trung != ''){
                        //Thêm dữ liệu vào bảng chi tiết đặt phòng
                        $ctDatPhong = new chitietdatphong();
                        $ctDatPhong->mact = $mact;
                        $ctDatPhong->ngaydat = $ngaydat;
                        $ctDatPhong->ngayden = date('Y-m-d',strtotime($ngayden));
                        $ctDatPhong->ngaydi = date('Y-m-d',strtotime($ngaydi));
                        $ctDatPhong->songuoilon = $nguoilon;
                        $ctDatPhong->sotreem = $treem;
                        $ctDatPhong->xacnhan = 0;
                        $ctDatPhong->malp = $malp;
                        $ctDatPhong->maphong = $val;
                        $ctDatPhong->makh = $makh;
                        $ctDatPhong->maql = '';
                        $ctDatPhong->save();

                        //Thêm dữ liệu vô bảng khách hàng
                        $kh = new khachhang();
                        $kh->makh = $makh;
                        $kh->tenkh = $hoten;
                        $kh->email = $email;
                        $kh->sdt = $sdt;
                        $kh->save();

                        session_start();
                        $_SESSION['makh'] = $makh;
                        $_SESSION['mact'] = $mact;
                        return Response::json(['success'=>true]);
                        break; 
                    }
                }
            }else{           
                /*SAU KHI HẾT PHÒNG TRỐNG THÌ KIỂM TRA NGÀY THÁNG
                  SAU ĐÓ CHỌN RA PHÒNG TRỐNG THEO NGÀY THÁNG ĐỂ THÊM VÔ
                */
                    
                $kq = 0;
                foreach ($ds_maphong as $key => $val1) {
                    $flag = 1;
                    //Lấy danh sách mã phòng trong bảng chi tiết đặt phòng
                    $maphong_datphong = DB::table('chitiet_datphong')->where('maphong',$val1->maphong)->get();  
                    foreach ($maphong_datphong as $key => $val2) {
                        //Trùng
                        if(!(date('d-m-Y',strtotime($ngayden)) > date('d-m-Y',strtotime($val2->ngaydi))) || (date('d-m-Y',strtotime($ngaydi)) < date('d-m-Y',strtotime($val2->ngayden)))){
                            $flag =0;                            
                            break;
                        }
                    }
                   if($flag ==1 ) 
                        $kq = 1;
                        //Thêm dữ liệu vào bảng chi tiết đặt phòng
                            $ctDatPhong = new chitietdatphong();
                            $ctDatPhong->mact = $mact;
                            $ctDatPhong->ngaydat = $ngaydat;
                            $ctDatPhong->ngayden = date('Y-m-d',strtotime($ngayden));
                            $ctDatPhong->ngaydi = date('Y-m-d',strtotime($ngaydi));
                            $ctDatPhong->songuoilon = $nguoilon;
                            $ctDatPhong->sotreem = $treem;
                            $ctDatPhong->xacnhan = 0;
                            $ctDatPhong->malp = $malp;
                            $ctDatPhong->maphong = $val2->maphong;
                            $ctDatPhong->makh = $makh;
                            $ctDatPhong->maql = '';
                            $ctDatPhong->save();

                            //Thêm dữ liệu vô bảng khách hàng
                            $kh = new khachhang();
                            $kh->makh = $makh;
                            $kh->tenkh = $hoten;
                            $kh->email = $email;
                            $kh->sdt = $sdt;
                            $kh->save();

                            session_start();
                            $_SESSION['makh'] = $makh;
                            $_SESSION['mact'] = $mact;
                            return Response::json(['success'=>true]);
                    break;
                }
                //Nếu xét hết tất cả các phòng không thỏa đk thì hết phòng loại đó
                if($kq != 1)
                    return Response::json(['success'=>'het phong']);
            }
        }
            
    }

    //XÓA ĐẶT PHÒNG BÊN QUẢN LÍ
    public function xoaDatPhong(Request $request){
        if(Request::ajax()){
            $mact = Request::get('mact');

            $tenkh = DB::table('chitiet_datphong')
                    ->join('khach_hang','khach_hang.makh','=','chitiet_datphong.makh')
                    ->select('khach_hang.tenkh')->where('mact',$mact)->first();

            //Xóa trong bảng khách hàng
            DB::table('khach_hang')
                    ->join('chitiet_datphong','chitiet_datphong.makh','=','khach_hang.makh')
                    ->where('mact',$mact)
                    ->delete();
            //Xóa trong bảng chi tiết đặt phòng
            DB::table('chitiet_datphong')->where('mact',$mact)->delete();

            return Response::json(['success'=>true, 'tenkh'=>$tenkh->tenkh]);
        }
    }
    

    //XÁC NHẬN ĐẶT PHÒNG BÊN QUẢN LÍ
    public function luuXacNhanDatPhong(Request $request){
        if(Request::ajax()){
            $mact = Request::get('mact');
            $maql = Auth::user()->maql;

            $tenkh = DB::table('chitiet_datphong')
                    ->join('khach_hang','khach_hang.makh','=','chitiet_datphong.makh')
                    ->select('khach_hang.tenkh')->where('mact',$mact)->first();

            //Cập nhật lại trạng thái cột xác nhận của bảng chi tiết đặt phong
            DB::table('chitiet_datphong')->where('mact',$mact)->update(['xacnhan'=>1, 'maql'=>$maql]);

            return Response::json(['success'=> true, 'tenkh'=>$tenkh->tenkh]);
        }
    }

    //CHỈNH SỬA THÔNG TIN ĐẶT PHÒNG BÊN QUẢN LÍ
    public function chinhSuaDatPhong(Request $request){
        if(Request::ajax()){
            $mact = Request::get('mact');

            session_start();
            //Lấy biến mã chi tiết này truyền qua bên cái chi tiết đặt phòng để lấy dl
            //QUA QLDATPHONGCONTROLLER
            $_SESSION['mact'] = $mact;
            return Response::json(['success'=>true]);
        }
    }
}
