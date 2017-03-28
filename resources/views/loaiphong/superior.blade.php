@extends('khach_home')

@section('noidung')
<div class="panel-ChiTietPhong container-fluid" >
		<div class="row">
			<div class="col-md-5 ">
				<div id="Carousel_2" class="carousel slide">
					<ol class="carousel-indicators" style="display: inline-block;"> 
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
					<li data-target="#myCarousel" data-slide-to="1"></li> 
					<li data-target="#myCarousel" data-slide-to="2"></li> 
					<li data-target="#myCarousel" data-slide-to="3"></li> 
					<li data-target="#myCarousel" data-slide-to="4"></li> 

					</ol>

					<div class="carousel-inner"> 
						<div class="item active">
							<img src="{{ asset('public/img/room/superior1.jpg')}}" alt="superior1" class="img-responsive img-LoaiPhong">
						</div>
						<div class="item">
							<img src="{{ asset('public/img/room/superior2.jpg')}}" alt="superior2" class="img-responsive img-LoaiPhong">
						</div> 
						<div class="item">
							<img src="{{ asset('public/img/room/superior3.jpg')}}" alt="superior3" class="img-responsive img-LoaiPhong">
						</div>
						<div class="item">
							<img src="{{ asset('public/img/room/superior4.jpg')}}" alt="superiord4" class="img-responsive img-LoaiPhong">
						</div> 
						<div class="item">
							<img src="{{ asset('public/img/room/superior5.jpg')}}" alt="superior5" class="img-responsive img-LoaiPhong">
						</div> 

					</div>
					<a class="left carousel-control" href="#Carousel_2" role="button" data-slide="prev">
						<span class="icon-prev" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#Carousel_2" role="button" data-slide="next">
						<span class="icon-next" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a> 
				</div>
				
				
			</div>
			<div class="col-md-7">
				<h2 class="text-LoaiPhong text-center">Phòng Superior</h2>				
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
						<td>1 giường đôi hoặc 2 giường đơn</td>

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
				<p style="margin-top: 15px">
				Với trang thiết bị tiện nghi, sang trọng, nội thất bên trong bao gồm những chất liệu hài hòa với thiên nhiên được bố  trí giản dị nhưng vẫn thể hiện phong cách sang trọng kiểu châu Âu. Các bức tranh hay ảnh nghệ thuật chính là điểm nhấn cho không gian phòng.
				</p>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-5">
				<div class="pull-right">
					<h1 style="color: #dc3522" class="text-right">1,980,000 VND</h1>
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