@extends('loaiphong')

@section('noidung')
<div class="panel-ChiTietPhong container-fluid" >
		<div class="row">
			<div class="col-md-5 ">
				<div id="CarouselRoom" class="carousel slide">
					<ol class="carousel-indicators" style="display: inline-block;"> 
					<li data-target="#CarouselRoom" data-slide-to="0" class="active"></li> 
					<li data-target="#CarouselRoom" data-slide-to="1"></li> 
					<li data-target="#CarouselRoom" data-slide-to="2"></li> 
					<li data-target="#CarouselRoom" data-slide-to="3"></li> 
					<li data-target="#CarouselRoom" data-slide-to="4"></li> 
					</ol>

					<div class="carousel-inner"> 
						<div class="item active">
							<img src="{{ asset('public/img/room/standard1.jpg')}}" alt="standard1" class="img-responsive">
						</div> 
						<div class="item">
							<img src="{{ asset('public/img/room/standard2.jpg')}}" alt="standard2" class="img-responsive">
						</div> 
						<div class="item">
							<img src="{{ asset('public/img/room/standard3.jpg')}}" alt="standard3" class="img-responsive">
						</div>
						<div class="item">
							<img src="{{ asset('public/img/room/standard4.jpg')}}" alt="standard4" class="img-responsive">
						</div> 
						<div class="item">
							<img src="{{ asset('public/img/room/standard5.jpg')}}" alt="standard5" class="img-responsive">
						</div> 

					</div>
					<a class="left carousel-control" href="#CarouselRoom" role="button" data-slide="prev">
						<span class="icon-prev" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#CarouselRoom" role="button" data-slide="next">
						<span class="icon-next" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a> 
				</div>
				
				
			</div>
			<div class="col-md-7">
				<h2 class="text-LoaiPhong text-center">Phòng Standard</h2>				
				<table class="table-hover  table-LoaiPhong">
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
							Giường
						</th>
						<td>2 giường đơn</td>

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
							Giường phụ
						</th>
						<td>450.000VND/giường/đêm</td>
					</tr>
					<tr>
						<th>
							<i class="glyphicon glyphicon-menu-right" style="color: green;"></i>
							Với trẻ em
						</th>
						<td >tối đa 2 trẻ em dưới 12 tuổi được miễn phí ở chung phòng bố mẹ, phụ thu ăn sáng và giường phụ</td>
					</tr>
				</table>
				<p style="margin-top: 20px">
				Không gian thoáng đãng, thiết kế ấm cúng, trang thiết bị hiện đại, sang trọng với đầy đủ tiện nghi phục vụ cho nhu cầu nghỉ ngơi, thư giãn của du khách.
				</p>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-5">
				<div class="pull-right">
					<h1 style="color: #dc3522" class="text-right">1,700,000 VND</h1>
					<br>

				</div>
			</div>
			<div class="col-md-7">
				<br>
				<div class="text-center" style="color: gray">
					<div class="col-md-3" data-toggle="tooltip" data-placement="bottom" title="Wifi miễn phí">				
						<i class="fa fa-wifi fa-2x" ></i>

					</div>
					<div class="col-md-3" data-toggle="tooltip" data-placement="bottom" title="TV LED">
						<i class="fa fa-television fa-2x"></i>				
					</div>
					<div class="col-md-3" data-toggle="tooltip" data-placement="bottom" title="Bồn Tắm">
						<i class="fa fa-bath fa-2x"></i>	
					</div>
					<div class="col-md-3" data-toggle="tooltip" data-placement="bottom" data-html="true"
						title="Tủ lạnh/minibar <br> 
								TV màn hình LED <br> 
								Chìa khóa phòng điện tử <br> 
								Két sắt an toàn điện tử <br> 
								Dụng cụ pha trà, cà phê <br> 
								Máy sấy tóc" >	
						<i class="fa fa-bars fa-2x"></i>			
					</div>							
				</div>				
			</div>		
		</div>

		<div class="row">
			<div class="col-md-5">
				<div class="pull-right">
					<button type="button" class="btn btn-outline btn-DatPhong "
					style="width: 290px">Đặt Phòng</button>
				</div>	
			</div>
		</div>
		
	</div>
@stop