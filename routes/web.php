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
Route::get('chitietdv',function(){
	return view('khach.chitietdv');
});
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
Route::get('datphong',function(){
	return view('khach.datphong');
});

Route::get('chitietdv/{madv}',['uses'=>'dichVuController@chiTietDV']);




//TRANG QUẢN LÍ
Route::group(['prefix'=>'quanli', 'middleware'=>'auth'],function(){
	//Thông tin quản lí
	Route::post('thongtinql',['uses'=>'quanLiController@thongTinQL']);
	//Thêm quản lí
	//Route::get('themql',['uses'=>'quanLiController@themQL']);
	Route::post('themql',['uses'=>'quanLiController@luuThemQL']);

	//Quản lí đặt phòng
	Route::get('qldatphong',['uses'=>'qlDatPhongController@qldatphong']);
	Route::group(['prefix'=>'qldatphong'],function(){
		Route::get('xacnhan',['uses'=>'qlDatPhongController@xacNhan']);
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


