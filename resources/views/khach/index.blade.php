@extends('khach_home')


@section('noidung')
<div class="panel-TrangChu text-center">
		<h1>WELCOME TO TERRACOTTA HOTEL & RESORT</h1>
		<p>Ẩn mình bên bờ hồ Tuyền Lâm cùng với dịch vụ đẳng cấp 4 sao, Terracotta Đà Lạt là một trong những điểm đến lý tưởng dành cho những ai yêu thích thiên nhiên và mong muốn tìm đến những nơi nghỉ dưỡng đẳng cấp đúng nghĩa.</p>
	</div> <!-- end giới thiệu -->

	<div class="clearfix"></div>

	<div class="">
		<div class="container">
			<!-- Panel standard room -->
			<div class="col-sm-6 col-md-4">
			    <div class="panel-GioiThieuPhong">
			      	<img src="{{ asset('public/img/room/standard1.jpg') }}" alt="">
			        <h3 class="text-LoaiPhong">Phòng Standard</h3>
			        <table class="table-LoaiPhong">
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Kích thước 
							</th>
							<td>35 m<sup>2</sup></td>								
						</tr>							
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Sức chứa
							</th>
							<td>3 khách</td>
						</tr>
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Giường
							</th>
							<td>2 giường đơn</td>
						</tr>
					</table>
			        <p><a href="room_standard.htm" class="btn btn-info btn-md" role="button">Chi Tiết</a></p>
				</div>
			</div>
			<!-- Panel superior room -->
			<div class="col-sm-6 col-md-4">
			    <div class="panel-GioiThieuPhong">
			      	<img src="{{ asset('public/img/room/superior1.jpg') }}" alt="">
			        <h3 class="text-LoaiPhong">Phòng Superior</h3>
			        <table class="table-LoaiPhong">
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Kích thước 
							</th>
							<td>35 m<sup>2</sup></td>								
						</tr>							
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Sức chứa
							</th>
							<td>3 khách</td>
						</tr>
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Giường
							</th>
							<td>1 giường đôi hoặc 2 giường đơn</td>
						</tr>
					</table>
			        <p><a href="room_superior.htm" class="btn btn-info btn-md" role="button">Chi Tiết</a></p>

				</div>
			</div>
			<!-- Panel deluxe room -->
			<div class="col-sm-6 col-md-4">
			    <div class="panel-GioiThieuPhong">
			      	<img src="{{ asset('public/img/room/deluxe1.jpg') }}" alt="">
			        <h3 class="text-LoaiPhong">Phòng Deluxe</h3>
			        <table class="table-LoaiPhong">
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Kích thước 
							</th>
							<td>50 m<sup>2</sup></td>								
						</tr>							
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Sức chứa
							</th>
							<td>3 khách</td>
						</tr>
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Giường
							</th>
							<td>1 giường đôi hoặc 2 giường đơn</td>
						</tr>
					</table>
					<p><a href="room_deluxe.htm" class="btn btn-info btn-md text-center" role="button">Chi Tiết</a></p>
				</div>
			</div>
		</div>
		<div class="container" style="margin-top: 25px">
			<div class="col-sm-6 col-md-4 col-md-offset-2">
			    <div class="panel-GioiThieuPhong">
			      	<img src="{{ asset('public/img/room/premium1.jpg') }}" alt="">


			        <h3 class="text-LoaiPhong">Phòng Premium - Villa</h3>
			        <table class="table-LoaiPhong">
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Kích thước 
							</th>
							<td>40 m<sup>2</sup></td>								
						</tr>							
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Sức chứa
							</th>
							<td>2 khách</td>
						</tr>
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Giường
							</th>
							<td>1 giường đôi hoặc 2 giường đơn</td>
						</tr>
					</table>
			        <p><a href="room_premium.htm" class="btn btn-info" role="button">Chi Tiết</a></p>

				</div>
			</div>
			<div class="col-sm-6 col-md-4 ">
			    <div class="panel-GioiThieuPhong">
			      	<img src="{{ asset('public/img/room/junior1.jpg') }}" alt="">
			        <h3 class="text-LoaiPhong">Phòng Junior - Villa</h3>
			        <table class="table-LoaiPhong">
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Kích thước 
							</th>
							<td>50 m<sup>2</sup></td>								
						</tr>							
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Sức chứa
							</th>
							<td>2 khách</td>
						</tr>
						<tr>
							<th>
								<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
								Giường
							</th>
							<td>1 giường đôi</td>
						</tr>
					</table>
			        <p><a href="room_junior.htm" class="btn btn-info" role="button">Chi Tiết</a></p>

				</div>
			</div>
		</div>
	  	

	</div>

	<div class="text-GioiThieu panel-TrangChu text-center">
		<h2>Hình Ảnh</h2>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<div id="CarouselBot" class="carousel slide">
			<ol class="carousel-indicators" > 
				<li data-target="#CarouselBot" data-slide-to="0" class="active"></li> 
				<li data-target="#CarouselBot" data-slide-to="1"></li> 
				<li data-target="#CarouselBot" data-slide-to="2"></li> 
				<li data-target="#CarouselBot" data-slide-to="3"></li> 
				<li data-target="#CarouselBot" data-slide-to="4"></li> 
				<li data-target="#CarouselBot" data-slide-to="5"></li> 
				<li data-target="#CarouselBot" data-slide-to="6"></li> 


			</ol>
			<div class="carousel-inner"> 
				<div class="item active">
					<img src="{{ asset('public/img/gallery/1.jpg') }}" alt="1" class="img-responsive img-LoaiPhong">
				</div>
				<div class="item">
					<img src="{{ asset('public/img/gallery/10.jpg')}}" alt="10" class="img-responsive img-LoaiPhong">
				</div>
				<div class="item">
					<img src="{{ asset('public/img/gallery/3.jpg')}}" alt="3" class="img-responsive img-LoaiPhong">
				</div>
				<div class="item">
					<img src="{{ asset('public/img/gallery/13.jpg')}}" alt="13" class="img-responsive img-LoaiPhong">
				</div>
				<div class="item">
					<img src="{{ asset('public/img/gallery/5.jpg')}}" alt="5" class="img-responsive img-LoaiPhong">
				</div>
				<div class="item">
					<img src="{{ asset('public/img/gallery/6.jpg')}}" alt="6" class="img-responsive img-LoaiPhong">
				</div>
				<div class="item">
					<img src="{{ asset('public/img/gallery/7.jpg')}}" alt="7" class="img-responsive img-LoaiPhong">
				</div>



			</div>
			<a class="left carousel-control" href="#CarouselBot" role="button" data-slide="prev">
				<span class="icon-prev" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#CarouselBot" role="button" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a> 
		</div>
	</div>
@stop

@section('script')
	<script>
		$('#CarouselBot').carousel({ 
	        interval:   4000    
	    });
	</script>
@stop