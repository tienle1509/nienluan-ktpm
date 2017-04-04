<?php
use App\Http\Middleware\RedirectIfAuthenticated;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ĐĂNG NHẬP
Route::get('dangnhap',['uses'=>'Auth\LoginController@getDangNhap']);
Route::post('quanli',['uses'=>'Auth\LoginController@postDangNhap']);

//ĐĂNG XUẤT
Route::get('dangxuat',['uses'=>'Auth\LoginController@getDangXuat']);

//TRANG CHỦ      
//CHÚ Ý : MẤY CÁI ROUTE CỦA KHÁCH MỚI CHỈ ĐỂ HIỂN THỊ COI ĐÚNG KHÔNG, VIẾT CODE THÌ SỬA ROUTE LẠI 
Route::get('home',function(){
	return view('khach.index');
});
//GIỚI THIỆU
Route::get('gioithieu',function(){
	return view('khach.gioithieu');
});
//DỊCH VỤ
Route::get('dichvu',function(){
	return view('khach.dichvu');
});
Route::get('chitietdv/{madv}',['uses'=>'dichVuController@chiTietDV']);

//KHUYẾN MÃI
Route::get('khuyenmai',function(){
	return view('khach.khuyenmai');
});
//LIÊN HỆ
Route::get('lienhe',function(){
	return view('khach.lienhe');
});
//LOẠI PHÒNG
Route::get('deluxe',function(){
	return view('loaiphong.deluxe');
});
Route::get('standard',function(){
	return view('loaiphong.standard');
});
Route::get('superior',function(){
	return view('loaiphong.superior');
});
Route::get('premium',function(){
	return view('loaiphong.premium');
});
Route::get('junior',function(){
	return view('loaiphong.junior');
});

//ĐẶT PHÒNG
Route::post('datphong',['uses'=>'datPhongController@datPhong']);
//Lưu đặt phòng
Route::get('datphong',['uses'=>'xoaAjax@luuDatPhong']);
//Thay đổi panel loại phòng khi bấm button
Route::get('doipanel',['uses'=>'xoaAjax@doiPanel']);
//Đặt phòng thành công
Route::get('datphongthanhcong',function(){
	return view('khach.datphongthanhcong');
});


//TRANG QUẢN LÍ
Route::group(['prefix'=>'quanli', 'middleware'=>'auth'],function(){
	//Thông tin quản lí
	Route::post('thongtinql',['uses'=>'quanLiController@thongTinQL']);
	//Thêm quản lí
	//Route::get('themql',['uses'=>'quanLiController@themQL']);
	Route::post('themql',['uses'=>'quanLiController@luuThemQL']);

	//Quản lí đặt phòng
	Route::get('qldatphong',['uses'=>'qlDatPhongController@qldatphong']);
	//Xóa lượt đặt phòng
	Route::get('xoadatphong',['uses'=>'xoaAjax@xoaDatPhong']);
	//Xác nhận đặt phòng
	Route::get('luuxacnhandatphong',['uses'=>'xoaAjax@luuXacNhanDatPhong']);
	//Chỉnh sửa thông tin đặt phòng
	Route::get('chinhsuadatphong',['uses'=>'xoaAjax@chinhSuaDatPhong']);

	Route::group(['prefix'=>'qldatphong'],function(){
		Route::get('xacnhan',['uses'=>'qlDatPhongController@xacNhan']);
		Route::get('chitietdatphong',['uses'=>'qlDatPhongController@chiTietDatPhong']);
	});

	//Quản lí phòng
	Route::get('qlphong',['uses'=>'qlPhongController@quanLiPhong']);
	Route::get('themphong',['uses'=>'qlPhongController@themPhong']);
	Route::group(['prefix'=>'qlphong'],function(){
		Route::get('capnhatttphong',['uses'=>'qlPhongController@capNhatTTPhong']);
		Route::get('luucapnhatttphong',['uses'=>'qlPhongController@luuCNTTPhong']);
	});


	//Quản lí dịch vụ
	Route::get('qldichvu',['uses'=>'qlDichVuController@qlDichVu']);
	Route::group(['prefix'=>'qldichvu'],function(){
		//Thêm dịch vụ mới
		Route::get('themdv',['uses'=>'qlDichVuController@themDV']);
		Route::post('luudv',['uses'=>'qlDichVuController@luuDV']);

		//Chi tiết, chỉnh sửa dịch vụ
		Route::get('xoaanhdv/{id}',['uses'=>'xoaAjax@xoaAnhDV']);
		Route::get('chitietdv/{madv}',['uses'=>'qlDichVuController@chiTietDV']);
		Route::get('xoadv',['uses'=>'xoaAjax@xoaDV']);
		Route::post('luucapnhat',['uses'=>'qlDichVuController@luuCapNhat']);
	});

	//Khuyến Mãi
	Route::get('khuyenmai',['uses'=>'khuyenMaiController@khuyenmai']);
	Route::group(['prefix'=>'khuyenmai'],function(){
		Route::get('themkm',['uses'=>'khuyenMaiController@themKM']);
		Route::post('luukm',['uses'=>'khuyenMaiController@luuKM']);
		Route::get('chitietkm/{makm}',['uses'=>'khuyenMaiController@chiTietKM']);
		Route::get('xoakm',['uses'=>'xoaAjax@xoaKM']);
		Route::post('capnhatkm',['uses'=>'khuyenMaiController@capNhatKM']);
	});

	//Ý kiến đóng góp
	Route::get('ykien',['uses'=>'yKienController@ykien']);

}); 

Route::get('dangxuat',['uses'=>'Auth\LoginController@getDangXuat']);





//CÁC VÍ DỤ MINH HỌA
Route::get('kt', function(){
	$ds = DB::table('chitiet_datphong')->join('khach_hang','khach_hang.makh','=','chitiet_datphong.makh')->get();
	$row = count($ds);
	echo $row;
	echo '<pre>';
	print_r($ds);
});

Route::get('sd',function(){
	$a = '2-4-2017';
	echo 'Ngày hôm nay : '.$a.'<br>';
	$a1 = '2-4-2017';
	echo 'Ngày biến a1 : '.$a1.'<br>';
	echo '<hr>';
	$b = '2-4-2017';
	echo 'Ngày hôm nay : '.$b.'<br>';
	$b1 = '2-4-2017';
	echo 'Ngày biến a1 : '.$b1.'<br>';
	if((date('d-m-Y',strtotime($a)) > date('d-m-Y',strtotime($b1))) || (date('d-m-Y',strtotime($a1)) < date('d-m-Y',strtotime($b))))
		echo 'ĐIỀU KIỆN ĐÚNG';
	else
		echo 'ĐIỀU KIỆN SAI';

});

Route::get('li',function(){
	$ds_maphong = DB::table('phong')->where('malp','LP001')->where('tinhtrang',0)->get();
	foreach ($ds_maphong as $key => $val1) {
                    //Lấy danh sách mã phòng trong bảng chi tiết đặt phòng
                    $maphong_datphong = DB::table('chitiet_datphong')->where('maphong',$val1->maphong)->get();  
                    foreach ($maphong_datphong as $key => $val2) {
                        //Không trùng
                        echo 'Ngày đi trong csdl : '.$val2->maphong.'<br>';
                        if((date('d-m-Y',strtotime('3-4-2017')) > date('d-m-Y',strtotime($val2->ngaydi))) 
                        || (date('d-m-Y',strtotime('3-4-2017')) < date('d-m-Y',strtotime($val2->ngayden)))

                        	){
                        	//echo $val2->maphong;
                        	ECHO 'ĐÚNG';

                        }
                        else
                			echo 'sai';
                    }
                }
});

Route::get('ha',function(){
	$ds_maphong = DB::table('phong')->where('malp','LP003')->where('tinhtrang',0)->get();
	//$co = count($ds_maphong);
            $arr_maphong_cu = array();
            foreach ($ds_maphong as $key => $val) {
                $arr_maphong_cu[] = $val->maphong;
            }
    $c = count($arr_maphong_cu);
    echo $c.'<hr>';
    echo '<pre>';
    print_r($arr_maphong_cu);
    echo '<hr>';


    //Kiểm tra dữ liệu trong bảng chi tiết đặt phòng
            $ds_ctdatphong = DB::table('chitiet_datphong')->distinct()->where('malp','LP003')->get();
            $ds = DB::table('chitiet_datphong')->distinct('maphong')->where('malp','LP003')->count('maphong');
            echo 'Số mã : '.$ds;
            $arr_map_ctdp = array();
            foreach ($ds_ctdatphong as $key => $val) {
                $arr_map_ctdp[] = $val->maphong;
            }

		$c1 = count($arr_map_ctdp);
		    echo $c1.'<hr>';
		    echo '<pre>';
		    print_r($arr_map_ctdp);
		    echo '<hr>';
	if($ds < $c){
		foreach ($arr_maphong_cu as $value) {
			$t = in_array($value, $arr_map_ctdp) ? 'trùng' : $value;
			//echo $t.'<hr>';

			if($t != 'trùng'){
				//echo 'hi';
				echo $t.'<hr>';
				echo 'Vòng lặp tìm trùng';
				break;
			}					
		}	
	}else{
		$f = 0;
		$kq = 0;
		foreach ($ds_maphong as $key => $val1) {
		$maphong_datphong = DB::table('chitiet_datphong')->distinct('maphong')->where('maphong',$val1->maphong)->get();
			
			foreach ($maphong_datphong as $key => $val2) {
				echo $val2->maphong.'<br>';
				if($val2->maphong == 'DE06'){
					$f = 1;
					$kq = 1;
					break;
				}
			}
			if ($f==1) break;
		}
		if($kq != 1)
			echo 'KHÔNG ';
	}

	
});



Route::get('ka',function(){
	//Lấy danh sách phòng theo mã loại phòng khi khách chọn
            $ds_maphong = DB::table('phong')->where('malp','LP001')->where('tinhtrang',0)->get();
            //Đếm số mã phòng
            $count_macu = count($ds_maphong);
            echo 'Số mã phòng cũ : '.$count_macu.'<br>';

            $arr_maphong_cu = array();  //Mảng chứa mã loại phòng trong bảng phòng
            foreach ($ds_maphong as $key => $val) {
                $arr_maphong_cu[] = $val->maphong;
            }
            echo '<pre>';
            print_r($arr_maphong_cu);
            echo '<hr>';

            //Kiểm tra dữ liệu trong bảng chi tiết đặt phòng
            $ds_ctdatphong = DB::table('chitiet_datphong')->where('malp','LP001')->get();
            //Đếm số mã phòng trong bảng chi tiết đặt phòng
            $count_ma_ctdp = DB::table('chitiet_datphong')->distinct()->where('malp','LP001')->count('maphong');
            echo 'Số mã trong bảng chi tiết : '.$count_ma_ctdp.'<br>';
            $arr_map_ctdp = array(); //Mảng chứa mã loại phòng trong bảng chi tiết đặt phòng
            foreach ($ds_ctdatphong as $key => $val) {
                $arr_map_ctdp[] = $val->maphong;
            }
            echo '<pre>';
            print_r($arr_map_ctdp);
            echo '<hr>';

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
                        echo 'mã loại : '.$val;

                        break;
                    }
                }
            }
});