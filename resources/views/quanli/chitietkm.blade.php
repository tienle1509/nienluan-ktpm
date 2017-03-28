@extends('quanli_home')

@section('active_km','active')

@section('noidung')

<script type="text/javascript">
    $(document).ready(function(){
        $("#xoa").click(function(){
            url = "http://localhost/nienluan-ktpm/quanli/khuyenmai/xoakm";
            var makm = $("form[name='form_CTKM']").find("input[name='txtMaKM']").val();
            
            $.ajax({
                url : url,
                type : "GET",
                dataType : "JSON",
                data : {"makm":makm},
                success : function(result){
                    if(result.success){
                        alert('Xóa thành công');
                        location = "http://localhost/nienluan-ktpm/quanli/khuyenmai";
                    }
                }
            });
        });
    });
</script>



<form name="form_CTKM" action="{{action('khuyenMaiController@capNhatKM')}}"  method="POST">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Chi Tiết Khuyến Mãi
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-gift"></i> <a href="{{asset('quanli/khuyenmai')}}"> Khuyến Mãi</a>
                            </li>
                            <li class="active">
                                 Chi Tiết Khuyến Mãi
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-3">
                        <label>Mã khuyến mãi</label>
                        <input type="text" class="form-control" readonly="" value="{{$km->makm}}" name="txtMaKM">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label>Tiêu Đề</label>
                        <input type="text" class="form-control" placeholder="Nhập tiêu đề" value="{{$km->tenkm}}" name="txtTieuDe">
                        <p style='color:red; margin-left: 15px'>{{$errors->first('txtTieuDe')}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label>Ngày Bắt Đầu</label>
                        <div id="datepicker1" class="input-group date" data-date-format="dd-mm-yyyy">              
                            <input class="form-control" type="text" readonly="" value="<?php echo date('d-m-Y',strtotime($km->ngaybd)) ?>" name="txtNgayBD">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                        </div>
                        <p style='color:red; margin-left: 15px'>{{$errors->first('txtNgayBD')}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label>Ngày Kết Thúc</label>
                        <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">              
                            <input class="form-control" type="text" readonly="" value="<?php echo date('d-m-Y',strtotime($km->ngaykt)) ?>" name="txtNgayKT"/>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                        </div>
                        <p style='color:red; margin-left: 15px'>{{$errors->first('txtNgayKT')}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-2">
                        <label>Chiết Khấu(%)</label>
                        <input type="number" class="form-control" value="{{$km->chietkhau}}" min="0" name="txtChietKhau">
                        <p style='color:red; margin-left: 15px'>{{$errors->first('txtChietKhau')}}</p>
                    </div>
                </div>

                <div class="row">
                        <div class="form-group col-lg-12">
                            <label>Áp dụng cho:</label>
                            <br> 
                                <?php 
                                    $arr_malp = array('LP001', 'LP002', 'LP003', 'LP004', 'LP005');
                                    //Tạo mảng lấy giá mã loại phòng đã check trong csdl
                                    $arr = array();
                                    //Thêm phần tử vào mảng
                                    foreach ($malp_list as $key => $val) {
                                        $arr[] = $val->malp;
                                    }
                                    
                                    //Duyệt mảng $arr_malp
                                    foreach ($arr_malp as $val) {
                                        //Hàm in_array() kiểm tra nếu một giá trị tồn tại trong mảng
                                        $checked = in_array($val, $arr) ? 'checked = "checked"' : '';

                                        //Lấy tên loại phòng
                                        $tenlp = DB::table('loai_phong')->where('malp',$val)->first();

                                        echo '<label class="checkbox-inline">'.
                                               '<input type="checkbox" name="txtLoaiPhong[]" value="'.$val.'"'.$checked.'>'.$tenlp->tenlp.
                                                '</label>';
                                    }
                                ?>                           
                        </div>
                        <p style='color:red; margin-left: 15px'>{{$errors->first('txtLoaiPhong')}}</p>
                    </div>

                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>Nội Dung</label>
                        <textarea id="editor1" rows="10" cols="80" name="txtNoiDung">
                            {{$km->noidungkm}}
                        </textarea>
                        <p style='color:red; margin-left: 15px'>{{$errors->first('txtNoiDung')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-lg-offset-8">
                        <div id="xoa" class="btn btn-danger btn-lg btn-block">Xóa</div>
                    </div>
                
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Lưu lại</button>
                    </div>
                </div>
     				
			</div> <!-- /container-fluid -->
</form>
@stop