<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\khuyenMaiRequest;
use Auth;
use App\khuyenmai;
use Carbon\Carbon;
use DB;
use App\chitietkm; 
use Validator;

class khuyenMaiController extends Controller
{
    public function khuyenmai(){
        $km_list = DB::table('khuyen_mai')->paginate(10);
        $row = count($km_list);

    	return view('quanli.khuyenmai')->with('km_list',$km_list)->with('row',$row);
    }

    public function themKM(){
    	return view('quanli.themkm');
    }

    //Mã khuyến mãi tự tăng
    public function maKM(){
        $makm = DB::table('khuyen_mai')->select('makm')->get();
        $max = 0;
        foreach ($makm as $value) {
            $catchuoi = substr($value->makm, 2);
            if($catchuoi > $max)
                $max = $catchuoi;
        }
        //echo '<pre>';
        //print_r($makm);
        $so = $max+1;
        if($so < 10){
            $makm_new = 'KM0'.$so;
        }else{
            $makm_new = 'KM'.$so;
        }
        return $makm_new;
    }


    public function luuKM(khuyenMaiRequest $request){
        $maql = Auth::user()->maql;
        $ngaytao = Carbon::now();
        $makm = $this->maKM();

        //Thêm vào bảng khuyến mãi
        $km = new khuyenmai();
        $km->makm = $makm;
        $km->tenkm = $request->txtTieuDe;
        $km->ngaytao = $ngaytao;
        $km->ngaybd = date('Y-m-d',strtotime($request->txtngayBD));  //trong CSDL lưu yyyy-mm-dd
        $km->ngaykt = date('Y-m-d',strtotime($request->txtngayKT));
        $km->chietkhau = $request->txtChietKhau;
        $km->noidungkm = $request->txtNoiDung;
        $km->maql = $maql;
        $km->save();   

    	//Thêm vào bảng chi tiết khuyến mãi
        foreach ($request->txtLoaiPhong as $val) {
            $chitiet = new chitietkm();
            $chitiet->makm = $makm;
            $chitiet->malp = $val;
            $chitiet->save();
        }   
        return redirect('quanli/khuyenmai');
    }

    public function chiTietKM($makm){
        $km = DB::table('khuyen_mai')->where('makm',$makm)->first();
        $malp_list = DB::table('chi_tiet_km')->where('makm',$makm)->get();

        return view('quanli.chitietkm')->with('km',$km)->with('malp_list',$malp_list);
    }

    public function capNhatKM(Request $request){
        $maql = Auth::user()->maql;
        $ngaytao = Carbon::now();
        $makm = $request->txtMaKM;
        $tenkm = $request->txtTieuDe;
        $ngaybd = date('Y-m-d',strtotime($request->txtNgayBD));
        $ngaykt = date('Y-m-d',strtotime($request->txtNgayKT));
        $chietkhau = $request->txtChietKhau;
        $noidungkm = $request->txtNoiDung;


        $v = Validator::make($request->all(),
            [
                'txtTieuDe'=>'required',
                'txtNgayBD'=>'required',
                'txtNgayKT'=>'required|after:txtNgayBD',
                'txtChietKhau'=>'required',
                'txtNoiDung'=>'required',
            ],
            [
                'txtTieuDe.required'=>'Tiêu đề không được rỗng',
                'txtNgayBD.required'=>'Ngày bắt đầu không được rỗng',
                'txtNgayKT.required'=>'Ngày kết thúc không được rỗng',
                'txtNgayKT.after'=>'Ngày kết thúc phải lớn hơn ngày bắt đầu',
                'txtChietKhau.required'=>'Chiết khấu không được rỗng',
                'txtNoiDung.required'=>'Nội dung không được rỗng'
            ]);
        
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }else{
            //Cập nhật trong bảng khuyến mãi
            DB::table('khuyen_mai')->where('makm',$makm)->update([
                                                                    'tenkm'=> $tenkm,
                                                                    'ngaytao'=>$ngaytao,
                                                                    'ngaybd'=>$ngaybd,
                                                                    'ngaykt'=>$ngaykt,
                                                                    'chietkhau'=>$chietkhau,
                                                                    'noidungkm'=>$noidungkm,
                                                                    'maql'=>$maql
                                                                ]);    
            //Cập nhật trong bảng chi tiết khuyến mãi
            foreach ($request->txtLoaiPhong as $val) {
                //Xóa mã khuyến mãi trong bảng
                DB::table('chi_tiet_km')->where('makm',$makm)->delete();
            }

            foreach ($request->txtLoaiPhong as $val) {
                //Thêm lại
                $chitiet = new chitietkm();
                $chitiet->makm = $makm;
                $chitiet->malp = $val;
                $chitiet->save();
            }

            return redirect('quanli/khuyenmai');
        }
    }
}
