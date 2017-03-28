@extends('quanli_home')

<!-- Gọi section này để bật active cho thanh menu bên trái in đậm -->
@section('active_qldp','active')

@section('noidung')
<div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Quản Lí Đặt Phòng
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-calendar"></i> Quản Lí Đặt Phòng
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- Panel -->
                <div class="row">
                    <!-- Panel Confirm -->
                    <div class="col-md-6 col-lg-3">                       
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">9</div>
                                        Lượt Đặt Phòng<br> Chưa Xác Nhận
                                    </div>
                                </div>
                            </div>
                            <a href="{{ asset('quanli/qldatphong/xacnhan') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">
                                        Xác nhận
                                    </span>
                                    <span class="pull-right">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>                           
                        </div>   
                    </div>
                    <!-- Panel New-->
                    <div class="col-md-6 col-lg-3">                       
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">69</div>
                                        Lượt Đặt Phòng<br> Trong Ngày
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">
                                        Chi Tiết
                                    </span>
                                    <span class="pull-right">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>                           
                        </div>   
                    </div>
                    <!-- Panel Monthly -->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        
                                        <div id="" class="huge">169</div>
                                        Lượt Đặt Phòng<br> Trong Tháng
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">
                                        Chi Tiết
                                    </span>
                                    <span class="pull-right">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>                           
                        </div>
                    </div>
                    <!-- Panel Total  -->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        
                                        <div id="" class="huge">669</div>
                                        Lượt Đặt Phòng<br> Tất Cả
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">
                                        Chi Tiết
                                    </span>
                                    <span class="pull-right">
                                        <i class="fa fa-arrow-circle-right"></i>
                                    </span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>                           
                        </div>
                    </div>

                </div> 

                <!-- table -->
                <div>
                    <h2>Lượt Đặt Phòng Mới</h2> 
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Mã ĐP</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>SĐT</th>
                                    <th>Số Ng.Lớn</th>
                                    <th>Số Trẻ Em</th>
                                    <th>Loại Phòng</th>
                                    <th>Ngày đặt</th>
                                    <th>Ngày nhận</th>
                                    <th>Ngày trả</th>
                                    <th>Xác nhận</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Nguyễn Văn Tài</td>
                                    <td>01230001112</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Deluxe</td>
                                    <td>01/03/2017</td>
                                    <td>05/03/2017</td>
                                    <td>07/03/2017</td>
                                    <td><i class="fa fa-close" style="color:red"></i></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Nguyễn Lâm</td>
                                    <td>01230431112</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>Standard</td>
                                    <td>01/03/2017</td>
                                    <td>07/03/2017</td>
                                    <td>08/03/2017</td>
                                    <td><i class="fa fa-check" style="color:green"></i></td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Lâm Ngọc Vi</td>
                                    <td>01239991112</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>Deluxe</td>
                                    <td>01/03/2017</td>
                                    <td>04/03/2017</td>
                                    <td>07/03/2017</td>
                                    <td><i class="fa fa-check" style="color:green"></i></td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Trần tdanh Tuyết</td>
                                    <td>01230007777</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>Standard</td>
                                    <td>01/03/2017</td>
                                    <td>05/03/2017</td>
                                    <td>07/03/2017</td>
                                    <td><i class="fa fa-close" style="color:red"></i></td>
                                </tr>
                            </tbody>


                    </div>
                </div>

@stop
