@extends('quanli_home')

<!-- Gọi section này để bật active cho thanh menu bên trái in đậm -->
@section('active_qldp','active')

@section('noidung')

<script type="text/javascript">
    //Bắt sự kiện khi bấm button chỉnh sửa
    $(document).ready(function(){
        $(".btnChinhSua").click(function(){
            var url = "http://localhost/nienluan-ktpm/quanli/chinhsuadatphong"
            var mact = $(this).closest('tr').find('td:first').text();
            //alert(mact) ;
           
           $.ajax({
                url : url,
                type : "GET",
                dataType : "JSON",
                data : {'mact':mact},
                success : function(result){
                    if(result.success){
                        location = "http://localhost/nienluan-ktpm/quanli/qldatphong/chitietdatphong";
                    }
                }
           });    
        });
    });
</script>


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
                                        <div class="huge">
                                            {{ $num_chuaxacnhan }}
                                        </div>
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
                                        
                                        <div id="" class="huge">{{ $num_all }}</div>
                                        Lượt Đặt Phòng<br> Tất Cả
                                    </div>
                                </div>
                            </div>
                            <a href="{{asset('quanli/qldatphong?sub=tatcaluotdatphong')}}">
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

                <!-- table HIỂN THỊ LƯỢT ĐẶT PHÒNG MỚI -->
                @if(!isset($_GET['sub']))
                    <div>
                        <h2>Lượt Đặt Phòng Mới</h2> 
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tbLuotDatPhong">
                                <thead>
                                    <tr>
                                        <th>Mã ĐP</th>
                                        <th>Tên khách hàng</th>
                                        <th>SĐT</th>
                                        <th>Người lớn</th>
                                        <th>Trẻ em</th>
                                        <th>Loại phòng</th>
                                        <th>Phòng</th>
                                        <th>Ngày đặt</th>
                                        <th>Ngày nhận</th>
                                        <th>Ngày trả</th>
                                        <th>Xác nhận</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($num_chuaxacnhan == 0)
                                        <tr>
                                            <td align="center" colspan="11" style="color: red"><h4>Không có lượt đặt phòng mới !</h4></td>
                                        </tr>
                                    @else
                                        @foreach($ds_datphongmoi as $key => $val)
                                            <tr>
                                                <td>{{ $val->mact }}</td>
                                                <td>{{ $val->tenkh }}</td>
                                                <td>{{ $val->sdt }}</td>
                                                <td>{{ $val->songuoilon }}</td>
                                                <td>{{ $val->sotreem }}</td>
                                                <td>
                                                    <?php
                                                        $tenlp = DB::table('loai_phong')->where('malp',$val->malp)->first();
                                                        echo $tenlp->tenlp;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        $tenphong = DB::table('phong')->where('maphong',$val->maphong)->first();
                                                        echo $tenphong->tenphong;
                                                    ?>
                                                </td>
                                                <td>{{ date('d-m-Y',strtotime($val->ngaydat)) }}</td>
                                                <td>{{ date('d-m-Y',strtotime($val->ngayden)) }}</td>
                                                <td>{{ date('d-m-Y',strtotime($val->ngaydi)) }}</td>
                                                <td><i class="fa fa-close" style="color:red"></i></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td align="center" colspan="11">{!! $ds_datphongmoi->render() !!}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                @endif


                
                @if(isset($_GET['sub']))
                    <!-- table HIỂN THỊ TẤT CẢ LƯỢT ĐẶT PHÒNG -->
                    @if($_GET['sub'] == 'tatcaluotdatphong')
                        <div>
                            <h2>Tất Cả Lượt Đặt Phòng</h2> 
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="tbLuotDatPhong">
                                    <thead>
                                        <tr>
                                            <th>Mã ĐP</th>
                                            <th>Tên khách hàng</th>
                                            <th>SĐT</th>
                                            <th>Người lớn</th>
                                            <th>Trẻ em</th>
                                            <th>Loại phòng</th>
                                            <th>Phòng</th>
                                            <th>Ngày đặt</th>
                                            <th>Ngày nhận</th>
                                            <th>Ngày trả</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($num_all == 0)
                                            <tr>
                                                <td align="center" colspan="11" style="color: red"><h4>Không có dữ liệu !</h4></td>
                                            </tr>
                                        @else
                                            @foreach($tatcaluotdatphong as $key => $val)
                                                <tr>
                                                    <td>{{ $val->mact }}</td>
                                                    <td>{{ $val->tenkh }}</td>
                                                    <td>{{ $val->sdt }}</td>
                                                    <td>{{ $val->songuoilon }}</td>
                                                    <td>{{ $val->sotreem }}</td>
                                                    <td>
                                                        <?php
                                                            $tenlp = DB::table('loai_phong')->where('malp',$val->malp)->first();
                                                            echo $tenlp->tenlp;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            $tenphong = DB::table('phong')->where('maphong',$val->maphong)->first();
                                                            echo $tenphong->tenphong;
                                                        ?>
                                                    </td>
                                                    <td>{{ date('d-m-Y',strtotime($val->ngaydat)) }}</td>
                                                    <td>{{ date('d-m-Y',strtotime($val->ngayden)) }}</td>
                                                    <td>{{ date('d-m-Y',strtotime($val->ngaydi)) }}</td>
                                                    @if($val->xacnhan == 0)
                                                        <td>
                                                            <i class="fa fa-close" style="color:red"></i>
                                                            <button class="btn btn-success btnChinhSua">Chỉnh Sửa</button>
                                                        </td>
                                                    @elseif($val->xacnhan == 1)
                                                        <td>
                                                            <i class="fa fa-check" style="color:green"></i>
                                                            <button class="btn btn-success btnChinhSua">Chỉnh Sửa</button>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td align="center" colspan="11">{!! $tatcaluotdatphong->render() !!}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    @endif
                @endif
@stop
