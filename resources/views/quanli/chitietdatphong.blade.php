@extends('quanli_home')

@section('active_qldp','active')

@section('noidung')
<div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Chi Tiết Đặt Phòng
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{asset('quanli/qldatphong')}}">
                                <i class="fa fa-calendar"></i> Quản Lí Đặt Phòng
                                </a>
                            </li>
                            <li class="active">
                                 Chi Tiết Đặt Phòng
                            </li>
                        </ol>
                    </div>
                </div>

            <form name="" action="{{action('qlDatPhongController@luuChiTietDP')}}" method="post"> 
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="table table-striped container-fluid">
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label>Mã Đặt Phòng</label>
                            <input name="txtMaCT" type="text" class="form-control" value="{{ $chitiet->mact }}" readonly="">
                        </div>
                        <div class="form-group col-md-2">
                            <label>Mã Khách Hàng</label>
                            <input name="txtMaKH" type="text" class="form-control" value="{{ $chitiet->makh }}" readonly="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label>Tên Khách Hàng</label>
                            <input name="txtTenKH" type="text" class="form-control" value="{{ $chitiet->tenkh }}" readonly="">
                        </div>
                        <div class="col-md-3 col-md-offset-1 form-group">
                            <label>Số Điện Thoại</label>
                            <input name="txtSDT" type="text" class="form-control" value="{{ $chitiet->sdt }}" readonly="">
                        </div>
                        <div class="col-md-3 col-md-offset-1 form-group">
                            <label>Email</label>
                            <input name="txtEmail" type="text" class="form-control" value="{{ $chitiet->email }}" readonly="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 form-group ">   
                            <label>Ngày Nhận</label>             
                            <div class="input-group date">
                                <input name="txtNgayNhan" id="txtngayBD" class="form-control" type="text" readonly="" value="{{ date('d-m-Y',strtotime($chitiet->ngayden)) }}" />
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                            </div>
                        </div>
                        <div class="col-md-3 col-md-offset-1 form-group ">   
                            <label>Ngày Trả</label>             
                            <div class="input-group date">
                                <input name="txtNgayTra" id="txtngayKT" class="form-control" type="text" readonly="" value="{{ date('d-m-Y',strtotime($chitiet->ngaydi)) }}" />
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label>Số Người Lớn</label>
                            <select name="cboNgLon" id="cboNgLon" class="form-control">
                                <?php
                                    $arr_val = array(1,2,3,4,5,6);
                                    $arr_nglon = array($chitiet->songuoilon);
                                    foreach ($arr_val as $val) {
                                        $selected = in_array($val, $arr_nglon) ? 'selected' : '';

                                        echo '<option value="'.$val.'" '.$selected.'>'.$val.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-3 col-md-offset-1 form-group">
                            <label>Số Trẻ Em</label>
                            <select name="cboTreEm" id="cboTreEm" class="form-control">
                                <?php
                                    $arr_val = array(0,1,2,3,4,5,6);
                                    $arr_trem = array($chitiet->sotreem);
                                    foreach ($arr_val as $val) {
                                        $selected = in_array($val, $arr_trem) ? 'selected' : '';

                                        echo '<option value="'.$val.'" '.$selected.'>'.$val.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label>Loại Phòng</label>
                            <select name="cboLP" id="cboLP" class="form-control">
                                <?php
                                    $arr = array('LP001','LP002','LP003','LP004','LP005');
                                    $arr_malp = array($chitiet->malp);
                                    foreach ($arr as $val) {                                    
                                        $select = in_array($val,$arr_malp) ? 'selected' : '';

                                        //Lấy tên loại phòng
                                        $tenlp = DB::table('loai_phong')->where('malp',$val)->first();

                                        echo '<option value="'.$val.'" '.$select.'>'.$tenlp->tenlp.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pull-right">                
                    <button type="submit" class="btn btn-primary btn-lg btn-block ">Lưu lại</button>                   
                </div>
            </form>   


</div>
@stop