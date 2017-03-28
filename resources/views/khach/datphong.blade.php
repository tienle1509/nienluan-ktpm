<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet prefetch" href="css/datepicker.css">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css')}}">
	<link rel="icon" href="{{ asset('public/img/icon.png')}}">

	<title>Terracotta Hotel & Resort</title>
</head>
<style>
	body {
		margin-top: 50px; 
		background: #a7a37e;
	}
	.panel-DatPhong {
		margin-bottom: 25px;
	}
</style>
<body>
	<div>
	    <nav id="top-nav" class="navbar navbar-default navbar-fixed-top" role="navigation" >
	      <div class="container-fluid">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button type="button" class="btn btn-info navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button> 
	          <a class="navbar-brand" href="index.htm">
	            <img src="{{ asset('public/img/logo2.png')}}" alt="logoHotelTerracotta">
	          </a>
	        </div>
	    
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div id="mainmenu" class="collapse navbar-collapse">
	          <ul  class="nav navbar-nav navbar-right">
	            <li><a  href="index.htm">Trang Chủ</a></li>
	            <li><a href="about.htm">Giới Thiệu</a></li>
	            <li class="dropdown">
	                <button class="dropbtn">Loại Phòng </button>
	              	<div class="dropdown-content">
	                    <a href="room_standard.htm">Phòng Standard</a>
	                    <a href="room_superior.htm">Phòng Superior</a>
	                    <a href="room_deluxe.htm">Phòng Deluxe</a>
	                    <a href="room_premium.htm">Phòng Premium - Villa</a>
	                    <a href="room_junior.htm">Phòng Junior - Villa</a>
	            	</div>
		        </li>             
	            <li><a href="service.htm">Dịch Vụ</a></li>
	            <li><a href="promotion.htm">Khuyến Mãi</a></li>
	            <li><a href="contact.htm">Liên Hệ</a></li>
	          </ul> 
	        </div><!-- /.navbar-collapse -->
	      </div> <!-- /container -->
	    </nav>
	</div><!--  end Header -->
	<!-- sideshow -->
	<div class="col-lg-5 pull-right" >
		<div class="panel-DatPhong " style="padding-bottom:  10px;">
			<div id="myCarousel" class="carousel slide">
		      	<ol class="carousel-indicators"> 
		           <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
		           <li data-target="#myCarousel" data-slide-to="1"></li> 
		           <li data-target="#myCarousel" data-slide-to="2"></li> 
		           <li data-target="#myCarousel" data-slide-to="3"></li> 

		        </ol>
	      
				<div class="carousel-inner"> 
					<figure class="item active text-center">
						<div class="img-thumbnail" >
							<img src="{{ asset('public/img/gallery/1.jpg')}}" alt="" width="460px" height="256px">
						</div>
						<div class="img-thumbnail">
							<img src="img/gallery/2.jpg" alt="" width="460px" height="257px">
						</div>
					</figure> 

					<figure class="item text-center">
						<div class="img-thumbnail">
							<img src="img/gallery/3.jpg" alt="" width="460px" height="256px">
						</div>
						<div class="img-thumbnail">
							<img src="img/gallery/4.jpg" alt="" width="460px" height="257px">
						</div>
					</figure>
					<figure class="item text-center">
						<div class="img-thumbnail">
							<img src="img/gallery/5.jpg" alt="" width="460px" height="256px">
						</div>
						<div class="img-thumbnail">
							<img src="img/gallery/6.jpg" alt="" width="460px" height="257px">
						</div>
					</figure>
					<figure class="item text-center">
						<div class="img-thumbnail">
							<img src="img/gallery/7.jpg" alt="" width="460px" height="256px">
						</div>
						<div class="img-thumbnail">
							<img src="img/gallery/8.jpg" alt="" width="460px" height="257px">
						</div>
					</figure>
				</div> 
	    	</div>
		</div>
	</div>
	<!-- Panel Thong Tin Dat Phong -->
	<div class="col-lg-3">
		<div class="panel-DatPhong">
			<h3 style="color: #3498db">Thông Tin Đặt Phòng</h3>
			<div class="form-group">
				<label>Ngày Đến</label>			
				<div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
		        	<input class="form-control" type="text" readonly />
		        	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
				</div>
			</div>
			<div class="form-group">
				<label>Ngày Đi</label>			
				<div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
		        	<input class="form-control" type="text" readonly />
		        	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
				</div>
			</div>
			<div class="form-group col-lg-6">
				<label>Người lớn</label>
				<select name="cboNgLon" id="cboNgLon" class="form-control" style="width: 80px">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
			</div>
			<div class="form-group col-lg-5">
				<label>Trẻ em</label>
				<select name="cboTrEm" id="cboTrEm" class="form-control" style="width: 80px">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
			</div>
			<div class="clearfix"></div>
			
		</div>
	</div>
	<!-- Panel Thong Tin Lien He -->
	<div class="col-lg-4">
		<div class="panel-DatPhong ">
			<h3 style="color: #3498db">Thông Tin Liên Hệ</h3>
			<div class="form-group">
				<label>Họ và Tên</label>
				<input type="text" class="form-control" placeholder="Nhập họ và tên của quý khách">
			</div>
			<div class="form-group">
				<label>Số Điện Thoại</label>
				<input type="text" class="form-control" placeholder="Nhập số điện thoại của quý khách" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" placeholder="Nhập email của quý khách">
			</div>
		</div>		
	</div>
	<!-- Panel Loai Phong -->
	<div class="col-lg-7" >
		<div class="panel-DatPhong" style="margin-top: 0px; padding-top: 1px; padding-bottom: 30px; ">
			<h3 style="color: #3498db">Loại Phòng</h3>			
			<div class="col-lg-4 ">
				<img src="img/room/standard1.jpg" alt="" width="100%" border="1px solid black">
			</div>
			<div class="col-lg-4">
				<p><i class="glyphicon glyphicon-menu-right" style="color: green;"></i> Kích thước: 35m<sup>2</sup></p>
				<p><i class="glyphicon glyphicon-menu-right" style="color: green;"></i> Giường: Twin</p>
		        <p><i class="glyphicon glyphicon-menu-right" style="color: green;"></i> Sức chứa: 3 khách</sup></p>
			</div>
			<div class="container-fluid">	
				<div class="col-lg-2">
					<select name="cboLP" id="cboLP" class="form-control" style="width: 180px">
						<option value="">Standard</option>
						<option value="">Superior</option>
						<option value="">Deluxe</option>
						<option value="">Premium - Villa</option>
						<option value="">Junior - Villa</option>
					</select>
				</div>
				<br>
				<div class="col-lg-2">
					<button type="button" class="btn btn-outline btn-DatPhong btn-block" style="margin-top: 58px;width: 180px">Đặt Phòng</button>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
	</div>

	<div class="clearfix"></div>	
	<div id="footer">
	    <div class="clearfix"></div> 
	    <div class="col-md-4">
	    	<a href="about.htm">
	    		<h2>Terracotta Đà Lạt</h2>
	    	</a>
	    </div>
	    
	    
	    <div class="col-xs-6 pull-right " style="margin-top: 20px">
			<div class="col-xs-9 text-center" style="margin-top: 5px">
    			<p>Copyright &copy 2017 Terracotta All Rights Reserved.</p>
    		</div>
			<div class="col-xs-1">
				<a href="#">
					<span class="fa fa-facebook-official fa-2x"></span>
				</a>        
			</div>
			<div class="col-xs-1">
				<a href="#">
				  <span class="fa fa-instagram fa-2x"></span>
				</a>
			</div>
			<div class="col-xs-1">
				<a href="#">
				  <span class="fa fa-youtube-square fa-2x"></span>
				</a>        
			</div>
	    </div>  
    	<div class="clearfix"></div>     	
  	</div><!--  end footer -->
	
	









	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/index.js"></script>
</body>
</html>