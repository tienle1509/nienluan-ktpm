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
					</ol>

					<div class="carousel-inner"> 
						<div class="item active">
							<img src="{{ asset('public/img/room/premium1.jpg')}}" alt="premium1" class="img-responsive">
						</div> 
						<div class="item">
							<img src="{{ asset('public/img/room/premium2.jpg')}}" alt="premium2" class="img-responsive">
						</div> 
						<div class="item">
							<img src="{{ asset('public/img/room/premium3.jpg')}}" alt="premium3" class="img-responsive">
						</div>
						<div class="item">
							<img src="{{ asset('public/img/room/premium4.jpg')}}" alt="premium4" class="img-responsive">
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
				<h2 class="text-LoaiPhong text-center">Phòng Premium - Villa</h2>				
				<table class="table-hover  table-LoaiPhong">
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
							Giường
						</th>
						<td>1 giường đôi hoặc 2 giường đơn</td>

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
							Giường phụ
						</th>
						<td>650.000VND/giường/đêm</td>
					</tr>
				</table>
				<p style="margin-top: 20px">
				Tại Terracotta Đà Lạt, chúng tôi còn phục vụ các loại phòng riêng tại Villas dành cho gia đình nhỏ hay những nhóm du khách riêng lẻ muốn tận hưởng không gian riêng biệt với loại phòng Premium bao gồm đầy đủ các tiện nghi sang trọng, đẳng cấp ngay trong mỗi căn Villa khác nhau tùy theo nhu cầu của khách hàng. 
				</p>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-5">
				<div class="pull-right">
					<h1 style="color: #dc3522" class="text-right">2,980,000 VND</h1>
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