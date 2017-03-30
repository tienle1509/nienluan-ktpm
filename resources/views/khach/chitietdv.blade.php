@extends('khach_home')

@section('noidung')
<div class="panel-TrangChu text-center container-fluid" style="  background-color: #2a2c2b; color: #e4d295">
		<h2>Terracotta Đà Lạt</h2>
		<p>
		 Một trong những điểm đến lý tưởng dành cho những ai yêu thích thiên nhiên và mong muốn tìm một nơi nghỉ dưỡng đẳng cấp đúng nghĩa.
		</p>
	</div>
	<div class="container-fluid">
		<div class="container-fluid panel-GioiThieu">
			<h1 style="color: #1e1e20">&nbsp;{!! $dv->tendv !!}</h1>

			<div id="" class="col-md-4">
				<br>
				<br>
				<div id="miniCarousel" class="carousel slide">
			      	<ol class="carousel-indicators"> 
			           <li data-target="#miniCarousel" data-slide-to="0" class="active"></li> 	           
			            
			            <?php
			            	$dataSlide = 0;
			            ?> 
		           		@foreach ($ds_anhDv as $anhDv) 
		           			<?php
				            	$dataSlide ++;
				            ?>
		           			<li data-target="#miniCarousel" data-slide-to="1"></li>
		           		@endforeach
			        </ol>
			      	<div class="carousel-inner"> 
                        <figure class="item active">
                            <img src="{{ asset('public/dichvu/'.$dv->anhdv) }}">
                        </figure>
                        @foreach ($ds_anhDv as $anhDv)
                            <figure class="item">
								<img src="{{ asset('public/dichvu/'.$anhDv->tenanh) }}" alt="">                             
                            </figure>
                        @endforeach
               
                   	</div>
			      	 
			    </div>
			</div>
			<div class="col-md-8">
				<p>{!! $dv->mota !!}</p>
				{!! $dv->noidungdv !!}

			</div>
			
		</div>	
		<div class="clearfix"></div>
	</div>
@stop

@section('script')
	<script>
		$('#miniCarousel').carousel({ 
	        interval:   4000    
	    });

	</script>
@stop