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

   <!--             <div class="container-fluid">
                    <div class="form-group col-sm-2">
                        <label>Mã Đặt Phòng</label>
                        <input type="text" class="form-control" value="101" disabled>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-md-6 form-group">
                        <label>Tên Khách Hàng</label>
                        <input type="text" class="form-control" value="Nguyễn Văn Tài" disabled>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 form-group">
                        <label>Số Điện Thoại</label>
                        <input type="text" class="form-control" value="01230001112" disabled>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 form-group">
                        <label>Số Người Lớn</label>
                        <input type="number" class="form-control" value="1">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 form-group">
                        <label>Số Trẻ Em</label>
                        <input type="number" class="form-control" value="1">
                    </div>
                    
                    
                </div>

                
                <div class="col-md-6">
                    <div class="col-md-6 form-group ">   
                        <label>Ngày Nhận</label>             
                        <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                            <input class="form-control" type="text" readonly />
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                        </div>
                    </div> 
                    <div class="clearfix"></div>
                    <div class="col-md-6 form-group ">   
                        <label>Ngày Trả</label>             
                        <div id="datepicker3" class="input-group date" data-date-format="dd-mm-yyyy">
                            <input class="form-control" type="text" readonly />
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                        </div>
                    </div> 
                    <div class="clearfix"></div>
                    <div class="col-md-6 form-group">
                        <label>Loại Phòng</label>
                        <select name="" id="" class="form-control">
                            <option value="">Phòng Standard</option>
                            <option value="">Phòng Superior</option>
                            <option value="" selected>Phòng Deluxe</option>
                            <option value="">Phòng Premium - Villa</option>
                            <option value="">Phòng Junior - Villa</option>
                        </select>
                    </div>
                </div>    -->

                <table class="table ">
                    <tr>
                        <td>
                            <div class="container-fluid">
                                <div class="form-group col-sm-3">
                                    <label>Mã Đặt Phòng</label>
                                    <input type="text" class="form-control" value="101" disabled>
                                </div>
                            </div>
                        </td>
                        <td align="right">
                            <div class="container-fluid">                
                                <div class="col-md-7">
                                    <button class="btn btn-primary btn-lg btn-block">Lưu lại</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-5 form-group">
                                <label>Tên Khách Hàng</label>
                                <input type="text" class="form-control" value="Nguyễn Văn Tài" disabled>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-8 form-group ">   
                                <label>Ngày Nhận</label>             
                                <div id="datepicker1" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" readonly />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-5 form-group">
                                <label>Số Điện Thoại</label>
                                <input type="text" class="form-control" value="01230001112" disabled>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-8 form-group ">   
                                <label>Ngày Trả</label>             
                                <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" readonly />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-3 form-group">
                                <label>Số Người Lớn</label>
                                <input type="number" class="form-control" value="1">
                            </div>
                            <div class="col-md-3 form-group">
                                <label>Số Trẻ Em</label>
                                <input type="number" class="form-control" value="1">
                            </div>
                        </td>
                        <td>
                            <div class="col-md-6 form-group">
                                <label>Loại Phòng</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Phòng Standard</option>
                                    <option value="">Phòng Superior</option>
                                    <option value="" selected>Phòng Deluxe</option>
                                    <option value="">Phòng Premium - Villa</option>
                                    <option value="">Phòng Junior - Villa</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>

     <!--           <br>
                <div class="container-fluid">                
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-lg btn-block">Lưu lại</button>
                    </div>
                </div>   -->
</div>
@stop