@extends('khach_home')

@section('noidung')
<div class="panel-TrangChu text-center container-fluid" style="  background-color: #2a2c2b; color: #e4d295">
		<h2>Terracotta Đà Lạt</h2>
		<p>
		 Một trong những điểm đến lý tưởng dành cho những ai yêu thích thiên nhiên và mong muốn tìm một nơi nghỉ dưỡng đẳng cấp đúng nghĩa.
		</p>
	</div>
	<div class=" col-md-12">
		<div class="panel-GioiThieu">
			<div class="container-fluid">
				<h1 style="color: #dc3522">&nbsp;Dịch vụ</h1>
			</div>
			<?php
				$dsdv = DB::table('dich_vu')->get();
			?>
			
			@foreach($dsdv as $data)
                
	            <div class="col-md-4">
					<div class="panel-DichVu ">
						
						<img 
							<?php
								$url = asset('public/dichvu/') ;
								echo "src=". '"'.$url. '/' .$data->anhdv .'"';
							?>  
						alt="" >
						<h3 class="text-center"><a href="chitietdv/{!!$data->madv!!}">{!! $data->tendv !!}</a></h3>
						<p>{!! $data->mota !!}</p>
						
					</div>
				</div>
                
            @endforeach
			
			<div class="clearfix"></div>
		</div>
	</div>
@stop