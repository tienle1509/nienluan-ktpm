@extends('khach_home')

@section('noidung')
<div class="panel-TrangChu text-center" >
		<h1>Liên Hệ</h1>
		
	</div> 
	<!-- Gop Y -->	
	<div class=" col-md-10 col-md-offset-1">
		<div class="panel-GioiThieu container-fluid" style="background-color: #faf6bd">
			<form action="">
				<h2>&nbsp;Góp Ý</h2>
				<div class="col-md-5">
					<div class="form-group">
						<label>Họ tên</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Số điện thoại</label>
						<input type="text" class="form-control"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control">
					</div>

				</div>

				<div class="col-md-7">
					<div class="form-group">
						<label>Nội dung</label>
						<textarea name="" id="" cols="30" rows="9" class="form-control"></textarea>
					</div>
				</div>
				
				<div class="col-md-2 pull-right" style="margin-bottom: 7px ">
					<button type="submit" class="btn btn-primary btn-block ">Gửi</button>
				</div>

			</form>
		</div>
	</div>
	<!-- /Gop Y -->	
	<div class="col-lg-10 col-md-offset-1">
		
		<div class="panel-GioiThieu container-fluid" style="padding: 0px; ">
		<h2>&nbsp;Thông tin liên hệ</h2>
		
		<p>
			<b>Địa chỉ:</b> Phân khu 7.9, Khu du lịch Hồ Tuyền Lâm, phường 3, thành phố Đà Lạt, Tỉnh Lâm Đồng. 
		</p>
		<p>
			<b>Tel:</b> 063 388 3838.
		</p>
		<p>
			<b>Vị trí:</b> Terracotta là một bán đảo tạo lạc ngay đầu bờ hồ Tuyền Lâm. Cách trung tâm thành phố Đà Lạt 6km, thiền viện Trúc Lâm 1km, sân bay Liên Khương 20km.
		</p>

		
		
		</div>
				
	</div>			
	<div class="clearfix"></div>
	<div class="panel-TrangChu text-center" style="margin-top: 0px">
		<h1>Bản Đồ</h1>
		
	</div> 
	 
		
	
	<div class="clearfix"></div>

	<div class="col-md-10 col-md-offset-1 text-center" >	    
	    <div style='overflow:hidden; '>
	    	<div id='gmap_canvas' style="height:500px"></div>
	    </div> 
	</div>

@stop

@section('script')
	<!-- google map -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7F_WMqCzQysd4z2hIVQTFh25N04WfhUU&callback=init_map"
  	type="text/javascript"></script>
	<script type='text/javascript'>
    	function init_map(){
    		var myOptions = {
    			zoom:13,
    			center:new google.maps.LatLng(11.89424,108.43811099999994),
    			mapTypeId: google.maps.MapTypeId.ROADMAP
    		};
			map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
			marker = new google.maps.Marker({
				map: map,position: new google.maps.LatLng(11.89424,108.43811099999994)
			});
			infowindow = new google.maps.InfoWindow({content:'<strong>Terracotta Hotel & Resort Dalat</strong><br>Terracotta hotel & resort Dalat<br>'});
			google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
			infowindow.open(map,marker);}
    </script>
@stop