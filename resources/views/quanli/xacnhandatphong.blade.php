@extends('quanli_home')

@section('active_qldap','active')

@section('noidung')
<div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Xác Nhận Đặt Phòng
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="booking.htm"><i class="fa fa-calendar"></i> Quản Lí Đặt Phòng</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-calendar"></i> Xác Nhận Đặt Phòng
                            </li>
                        </ol>
                    </div>
                </div>
              

                <!-- table -->
                <div>
                    <h2>Lượt Đặt Phòng Chưa Xác Nhận</h2> 
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr >
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
                                    <th  class="text-center">Thao Tác</th>
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
                                    <td>
                                        <button class="btn btn-success">Xác nhận</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Trần Thanh Tuyết</td>
                                    <td>01230007777</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>Standard</td>
                                    <td>01/03/2017</td>
                                    <td>05/03/2017</td>
                                    <td>07/03/2017</td>
                                    <td><i class="fa fa-close" style="color:red"></i></td>
                                    <td>
                                        <button class="btn btn-success">Xác nhận</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                            </tbody>


                    </div>
                </div>
    </div>
@stop