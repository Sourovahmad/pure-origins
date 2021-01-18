@extends('includes.app')

@section('content')


<!-- header section start -->
<!-- search form start -->
<div class="header_search_form animation">
	<div class="header_search_form_wrap">
		<form>
			<input type="text" name="search" placeholder="search here" id="search_frm" required="required">
			<button type="submit" id="search_submit"><i class="fa fa-send"></i></button>
		</form>
	</div>
</div>
<!-- search form end -->
<div class="st_section home_first_header">
    <!-- header strip start -->
	<div class="st_header_strip">
		<div class="container">
			<div class="home_strip_inner">
				<div class="header_icons">
					<a class="shoping_cart"><i class="fa fa-map-marker"></i></a>
					<a class="shoping_cart" href="#"><i class="fa fa-phone"></i>
						<!-- <span class="cart_count">6</span> -->
					</a>
				</div>
				<div class="nav_toggle">
				<span></span>
				<span></span>
				<span></span>
				</div>
			</div>
		</div>
	</div>
     <!-- header strip end -->
     



	 <!-- slider section start -->
	<div class="home_slider_main">
		<!-- slider images start --> 
		<div class=" syncro_image">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="{{ asset('suits/images/slide_4.jpg') }}" class="img-responsive" alt="slide"></div>
				<div class="swiper-slide"><img src="{{ asset('suits/images/slide_6.jpg') }}" class="img-responsive" alt="slide"></div>
				<div class="swiper-slide"><img src="{{ asset('suits/images/slide_7.jpg') }}" class="img-responsive" alt="slide"></div>
				<div class="swiper-slide"><img src="{{ asset('suits/images/slide_9.jpg') }}" class="img-responsive" alt="slide"></div>
			</div>
		</div>
		<!-- slider images end -->
		<!-- slider text -->
		<div class="slider_heading_main">
			<div class="container">
				<div class="width_50 pull_right">
					<div class="syncro_thumb slider_heading_text">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="inner_text">
									<h3>Kitchen Textiles</h3>
									<div>ALL CLEARANCE <br/> 60% OFF</div>
									<h3 class="bottom_text">EXCLUSIVELY ONLINE*<br/> Refresh your wardrobe for <br/> the season ahead.</h3>
									<br>
									<a href="#" class="read_m_btn">More</a> 	
								</div>
							</div>
							<div class="swiper-slide">
								<div class="inner_text">
									<h3>Pure Home </h3>
									<div>ALL CLEARANCE 70% OFF</div>
									<h3 class="bottom_text">EXCLUSIVELY ONLINE*<br/> On refusa continuar payar<br/> custosi traductores.</h3>
									<br>
									<a href="#" class="read_m_btn">More</a> 
								</div>
							</div>
							<div class="swiper-slide">
								<div class="inner_text">
									<h3>Pure Apparels</h3>
									<div>ALL CLEARANCE 80% OFF</div>
									<h3 class="bottom_text">EXCLUSIVELY ONLINE*<br/> Sed ut perspiciatis unde omnis<br/> iste natus error </h3>
									<br>
									<a href="#" class="read_m_btn">More</a> 
								</div>
							</div>
							<div class="swiper-slide">
								<div class="inner_text">
									<h3>Diversified Home Products </h3>
									<div>ALL CLEARANCE <br/>90% OFF</div>
									<h3 class="bottom_text">EXCLUSIVELY ONLINE*<br/> Lorem ipsum dolor sit amet<br/> consectetuer.</h3>
									<br>
									<a href="#" class="read_m_btn">More</a> 
								</div>
							</div>
						</div>
						<!-- nav start -->
						<div class="slider_navs">
							<span class="button_prev"><i class="fa fa-angle-left"></i></span>
							<span class="button_next"><i class="fa fa-angle-right"></i></span>
						</div>
						<!-- nav end -->
					</div>
				</div>
			
				<div class="width_50 slider_logo " style="padding: 20px;;">
					<a href="index.html">
						<img src="{{ asset('suits/images/icon/logo2.png') }}" alt="logo">
					</a>
					<h3>Sustainable Manufacturing for a Safer World.</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- slider text end -->
       
     @include('includes.nav')

     
</div><!-- header section end -->



<!-- winter wear section start -->
<div class="st_section home_wear_section pad_t_100">
	<div class="container">
		<div class="suit_wear_wrap">
			<div class="col-sm-4 pad_0 wear_text_box">
				<h3>LIMITED TIME</h3>
				<h1>ALL <br/>CLEARANCE <br/>60% OFF</h1>
			</div>
			<div class="col-sm-8 pad_0">
				<div class="st_thumb">
					<img src="{{ asset('suits/images/image1.jpg') }}" class="img-responsive" alt="slider image">
					<div class="thumb_overlay">
					   <h3>new collection</h3>
					   <h1><a href="#">Winter Wear</a></h1>
					</div>
				</div>
			</div>
		</div>
		<!-- suit wear crousel start -->
		<div class="suit_wear_crousel">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="st_thumb">
						<img src="{{ asset('suits/images/image5.jpg') }}" class="img-responsive" alt="slider image">
						<div class="thumb_overlay animation">
						   <h1>1/7</h1>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="st_thumb">
						<img src="{{ asset('suits/images/image6.jpg') }}" class="img-responsive" alt="slider image">
						<div class="thumb_overlay animation">
						   <h1>2/7</h1>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="st_thumb">
						<img src="{{ asset('suits/images/image9.jpg') }}" class="img-responsive" alt="slider image">
						<div class="thumb_overlay animation">
						   <h1>3/7</h1>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="st_thumb">
						<img src="{{ asset('suits/images/image7.jpg')}}" class="img-responsive" alt="slider image">
						<div class="thumb_overlay animation">
						   <h1>4/7</h1>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="st_thumb">
						<img src="{{ asset('suits/images/image12.jpg') }}" class="img-responsive" alt="slider image">
						<div class="thumb_overlay animation">
						   <h1>5/7</h1>
						</div>
					</div>
				</div><div class="swiper-slide">
					<div class="st_thumb">
						<img src="{{ asset('suits/images/image11.jpg') }}" class="img-responsive" alt="slider image">
						<div class="thumb_overlay animation">
						   <h1>5/7</h1>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="st_thumb">
						<img src="{{ asset('suits/images/image8.jpg')}}" class="img-responsive" alt="Slider image ">
						<div class="thumb_overlay animation">
						   <h1>6/7</h1>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="st_thumb">
						<img src="{{ asset('suits/images/image10.jpg') }}" class="img-responsive" alt="Slider image">
						<div class="thumb_overlay animation">
						   <h1>7/7</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- suit wear crousel end -->
	</div>
</div>
<!-- winter wear section end -->
<!-- our sector section start -->
<div class="st_section st_sector_setion">
	<div class="container">
		<div class="row">
			<div class="middle_heading_section">
				<h1>Our Sectors. Your chance.</h1>
				<p>Vim clita tritani intellegat eu, epicuri conceptam interpretaris ea est. Legimus mentitum postlant mei ut. Mei ex alii sanctus. </p>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="st_sector wow frombottom" data-wow-duration="2s">
				  <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="89.094px" height="140px" viewBox="0 0 89.094 140" enable-background="new 0 0 89.094 140" xml:space="preserve"><g><path fill="" d="M89.094,132.456L62.566,61.955l-36.013-0.021L0,132.532l15.368,1.834L13.144,140l63.147-0.062l-2.565-5.646L89.094,132.456z M23.256,33.115l4.189,21.483l34.195,0.016l4.196-21.579l5.839-3.669l7.785-22.638L56.615,0L44.528,21.412v0.058L32.479,0.075L9.63,6.808l7.787,22.635L23.256,33.115z"/></g></svg>
				  <h4>fashion</h4>
				  <div class="plus_circle">
					<span></span>
					<span></span>
				  </div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="st_sector wow frombottom">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
						<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
						<g><path d="M41.7,778.8l3.5-4l45.9,116.5c-3.2-8.2-8-14.3-13-18.4c-2.1-1.7-3.4-2.5-3.9-2.7c2.3,1,7,2,12.7,2.4c3.1,0.3,9.2,0.8,17.4,1.3c19.6,1.2,39.7,1.6,57.8,1.1c15.7-0.5,28.6-1.7,37-3.5c291.2-62.1,361.3-63.2,593.7,1.1c6.5,1.8,17.6,3.2,31.6,3.7c16.4,0.6,34.8,0.1,52.8-1.3c7.6-0.6,13.2-1.1,19-1.7c4.3-0.3,18.3-6.3,21.2-8.8l21.2-18.9l28.4-0.7c-16.1,0.4-31.5,5.9-43.1,18c-5.7,5.9-9.3,12.2-11,17.7c-0.4,1.4-0.3,0.6-0.4-2.5c-0.5-17.4-7.3-47-22.4-89.1c-57.8-160.5-53.4-376.2-2.3-583c8.6-34.6,9.5-65,6.3-88.7c-0.5-3.5-0.8-5.2-0.7-4.8l-1.1-4.5l-0.6-4.6c1.8,14.3,10.4,22.8,24.7,24.4l-3.9-0.6c-1.9-0.3-6.7-1-13.9-1.7c-34.7-3.4-72.6-2.9-106.3,4.1c-2.3,0.5-2.3,0.5-4.6,1c-232,52.9-395.5,59.8-617.1-0.8c-24.6-6.7-48.7-7.5-68.7-5c-3,0.4-4.5,0.7-4.3,0.6l-8.5,1.5c14-1.6,22-9.4,24.1-23.8l-0.7,5.3l-1.5,5.1c0.5-1.8,0.6-2,0.4-0.7c-2.4,16.4-1.5,42.3,6.2,77.9c57.2,266.9,57,419.8-1.7,610.8c-16.8,54.7-25.7,90.2-28,107.8c-0.1,0.5-0.1-1.6-1.9-9.3c-6.7-27.1-30.4-51.3-63.3-54.5C27.2,827.6,33.4,805.7,41.7,778.8L41.7,778.8z M42.7,940.9l-23.6-21.2l0,0l-6.3,2.5c-5.2-3-6.8-27.2,28.9-143.5c54.1-176.1,54.9-315.4,0-571.9c-16.3-76.1-5.3-114.6-5.3-114.6C39.3,71.7,59.2,52.4,80.2,50c0,0,49.9-11.5,110.7,5.1c246.1,67.3,424.6,35.3,579.5,0c76.3-17.4,154.8-4.3,154.8-4.3c20.9,2.4,40.7,21.4,43.4,42.8c0,0,13.4,53.9-5.6,130.7c-41.7,168.9-57.1,379.8,0,538.2c57.1,158.4,6.1,159.7,6.1,159.7c-15.5,13.8-45.5,26.6-66.8,28.3c0,0-83,9.7-130-3.3c-233.3-64.5-297.9-55.3-556.9,0c-49.5,10.6-135.6,2.6-135.6,2.6C68.7,949,54.7,946.3,42.7,940.9L42.7,940.9z M225.2,351c1.3-3.3,4.1-9.3,8.3-17.2c7.1-13.2,15.6-26.7,25.6-39.6c18.9-24.2,40.7-43.3,65.4-54.9c4.3-2,6.2-7.6,4.3-12.4c-2-4.8-7-7.1-11.4-5c-27.3,12.8-51.1,33.6-71.5,59.8c-10.7,13.7-19.8,28.1-27.3,42.2c-2.6,5-4.9,9.6-6.8,13.7c-1.2,2.5-1.9,4.3-2.3,5.4c-1.9,4.7,0.1,10.4,4.4,12.6C218.3,357.7,223.3,355.7,225.2,351z M800.4,351c-1.3-3.3-4.1-9.3-8.3-17.2c-7.1-13.2-15.6-26.7-25.6-39.6c-18.9-24.2-40.7-43.3-65.4-54.9c-4.3-2-6.2-7.6-4.3-12.4s7-7.1,11.4-5c27.3,12.8,51.1,33.6,71.5,59.8c10.7,13.7,19.8,28.1,27.3,42.2c2.6,5,4.9,9.6,6.8,13.7c1.2,2.5,1.9,4.3,2.3,5.4c1.9,4.7-0.1,10.4-4.4,12.6C807.3,357.7,802.3,355.7,800.4,351z M231,714.5c2.8,2.2,8.2,6,15.8,10.7c12.7,7.9,26.9,15.3,41.9,21.5c28.5,11.5,56.9,17.1,84.1,14.8c4.8-0.4,9.2,3.5,9.9,8.6c0.7,5.2-2.6,9.7-7.3,10c-30.1,2.5-61-3.6-91.8-16c-16.1-6.5-31.2-14.4-44.7-22.9c-4.8-3-9-5.8-12.7-8.4c-2.3-1.6-3.8-2.8-4.7-3.5c-4-3.1-5.1-9-2.5-13.1C221.6,712.1,226.9,711.4,231,714.5z M789.4,714.5c-2.8,2.2-8.2,6-15.8,10.7c-12.7,7.9-26.9,15.3-41.9,21.5c-28.5,11.5-56.9,17.1-84.1,14.8c-4.8-0.4-9.2,3.5-9.9,8.6c-0.7,5.2,2.6,9.7,7.3,10c30.1,2.5,61-3.6,91.8-16c16.1-6.5,31.2-14.4,44.8-22.9c4.8-3,9-5.8,12.7-8.4c2.3-1.6,3.8-2.8,4.7-3.5c4-3.1,5.1-9,2.5-13.1S793.4,711.4,789.4,714.5z"/></g>
						</svg>
				  <h4>Home Products</h4>
				  <div class="plus_circle">
					<span></span>
					<span></span>
				  </div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="st_sector wow frombottom">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
						<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
						<g><path d="M986.8,381c-2.2-3.5-14.4-22.6-35.8-50c-0.1-0.1-0.2-0.1-0.2-0.2c-13.5-17.6-24-29.8-31.6-37.9c-0.3-0.4-0.6-0.9-0.9-1.3c-20.2-22.9-41.7-44.9-64-65.3c-50-46-103.4-84-158.6-112.9c-22.1-11.6-44.8-21.8-67.5-30.5c-10.1-3.9-22.5,0-28.2,8.7c-9.6,14.8-25.2,37.2-44.9,59.4c-18.2,20.5-36,28.5-55,28.5c-19,0-36.8-7.9-55-28.5c-19.7-22.2-35.3-44.5-44.9-59.4C394.4,83,382,79.1,371.9,83c-22.7,8.6-45.4,18.9-67.5,30.5c-55.3,28.9-108.6,66.9-158.6,112.9c-22.2,20.4-43.8,42.4-64,65.3c-0.4,0.4-0.6,0.9-0.9,1.3c-7.7,8.1-18.2,20.2-31.7,37.9c-0.1,0.1-0.2,0.1-0.2,0.2c-21.4,27.4-33.6,46.4-35.8,50c-3.1,5-4,10.7-2.5,16.3c1.6,5.8,5.5,10.6,11,13.5l193.9,102.5c-0.1,0.1,0.8,0.6,1.8,1.1c3.4,1.9,7.3,2.9,11.4,2.9c8,0,15.6-4,19.8-10.4c0.4-0.7,9.2-14.1,24.9-33.8l-46,423.1c0.1,12.6,10.3,22.2,22.9,22.2h236.3h26.4l236.3,0c12.5,0,22.8-9.6,22.9-22.2l-46-423.1c15.7,19.7,24.5,33.1,24.9,33.8c4.2,6.4,11.7,10.4,19.8,10.4c4,0,8-1,11.4-2.9c1-0.5,1.9-1.1,1.8-1.1l193.9-102.5c5.5-2.9,9.5-7.7,11-13.5C990.8,391.7,989.9,385.9,986.8,381L986.8,381L986.8,381z M66.1,383.9c7.1-8.4,25.6-30.3,41.7-49.8l155.5,77.8c0,0-38.1,51.5-40.8,54.7L66.1,383.9L66.1,383.9L66.1,383.9z M513.2,875.3h-26.4H274.1l51.5-465c1.1-3.9,0.7-8.8-1.4-12.9c-3.1-6.4-9.2-10.9-16.5-12.2l-172.2-86.1c13.6-14.4,27.8-28.5,42.3-41.8c47.1-43.4,97.2-79,148.8-106.1c14.9-7.8,30-14.9,44.8-21.1c12.3,17.6,25.1,34,38.2,48.7c8,9.1,16.5,16.9,25.8,24.3c30.5,24.3,91.9,27.5,129,0c9.5-7,17.7-15.2,25.8-24.3c13-14.7,25.9-31.1,38.2-48.7c14.9,6.2,29.9,13.3,44.8,21.1c51.6,27,101.7,62.7,148.8,106.1c14.5,13.3,28.7,27.4,42.3,41.8l-172.2,86.1c-7.3,1.3-13.4,5.8-16.5,12.2c-2,4.1-2.4,9.1-1.4,12.9l51.5,465H513.2L513.2,875.3L513.2,875.3z M777.5,466.6c-1.5-2.1-40.8-54.7-40.8-54.7l155.5-77.8c16.2,19.5,34.6,41.4,41.8,49.8L777.5,466.6L777.5,466.6L777.5,466.6z"/></g>
						</svg>
				  <h4>Textiles</h4>
				  <div class="plus_circle">
					<span></span>
					<span></span>
				  </div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="st_sector wow frombottom" data-wow-duration="2s">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
						<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
						<g><path d="M980.2,569.5c-186,0-372,0-557.9,0c-117.1,0-234.2,0-351.3,0c3.3,3.3,6.6,6.6,9.8,9.8c0-127.3,0-254.6,0-381.8c0-5.4-4.5-9.8-9.8-9.8c-17,0-34.1,0-51.1,0c-5.4,0-9.8,4.5-9.8,9.8c0,171.4,0,342.8,0,514.1c0,30.3,0,60.6,0,90.9c0,5.4,4.5,9.8,9.8,9.8c17,0,34.1,0,51.1,0c5.4,0,9.8-4.5,9.8-9.8c0-32.5,0-64.9,0-97.4c-3.3,3.3-6.6,6.6-9.8,9.8c194.9,0,389.8,0,584.8,0c61,0,122,0,182.9,0c-3.3-3.3-6.6-6.6-9.8-9.8c0,32.5,0,64.9,0,97.4c0,5.4,4.5,9.8,9.8,9.8c32.5,0,65,0,97.4,0c5.4,0,9.8-4.5,9.8-9.8c0-32.5,0-64.9,0-97.4c-3.3,3.3-6.6,6.6-9.8,9.8c14.7,0,29.4,0,44.1,0c5.4,0,9.8-4.5,9.8-9.8c0-41.9,0-83.9,0-125.8c0-12.7-19.7-12.7-19.7,0c0,41.9,0,83.9,0,125.8c3.3-3.3,6.6-6.6,9.8-9.8c-14.7,0-29.4,0-44.1,0c-5.4,0-9.8,4.5-9.8,9.8c0,32.5,0,64.9,0,97.4c3.3-3.3,6.6-6.6,9.8-9.8c-32.5,0-65,0-97.4,0c3.3,3.3,6.6,6.6,9.8,9.8c0-32.5,0-64.9,0-97.4c0-5.4-4.5-9.8-9.8-9.8c-194.9,0-389.8,0-584.8,0c-61,0-122,0-182.9,0c-5.4,0-9.8,4.5-9.8,9.8c0,32.5,0,64.9,0,97.4c3.3-3.3,6.6-6.6,9.8-9.8c-17,0-34.1,0-51.1,0c3.3,3.3,6.6,6.6,9.8,9.8c0-186,0-372,0-558.1c0-15.7,0-31.3,0-47c-3.3,3.3-6.6,6.6-9.8,9.8c17,0,34.1,0,51.1,0c-3.3-3.3-6.6-6.6-9.8-9.8c0,127.3,0,254.6,0,381.8c0,5.4,4.5,9.8,9.8,9.8c186,0,372,0,557.9,0c117.1,0,234.2,0,351.3,0C992.8,589.1,992.8,569.5,980.2,569.5z"/><path d="M298.2,446.1c-40.2-5.1-81.8-10-119.2-26.5c-40.3-17.7-66.2-51.4-80.9-92.1c-2.3,4-4.6,8.1-6.9,12.1c91.6-18.4,169.3,30.9,197.5,118.9c3.9,12,22.8,6.9,19-5.2c-14.5-45.3-40.5-84.7-80.6-111.1c-41.6-27.4-93.4-31.2-141.1-21.6c-5,1-8.6,7.3-6.9,12.1c15.5,42.9,41.2,78.3,82,100c41.7,22.2,91,27.2,137.1,33C310.7,467.3,310.6,447.6,298.2,446.1z"/><path d="M943.9,471.6c26.5,14.7,24.2,74.8,6.6,94.7c-0.7,0.8,3.8,1.3-1.4,1.3c-3.6,0-7.1,0-10.7,0c-32.9,0-65.9,0-98.8,0c-118.9,0-237.9,0-356.8,0c-134.3,0-268.6,0-402.9,0c3.3,3.3,6.6,6.6,9.8,9.8c0-38.1,0-76.3,0-114.4c-3.3,3.3-6.6,6.6-9.8,9.8c188.7,0,377.4,0,566.1,0c101,0,201.9,0,302.9,0c12.7,0,12.7-19.7,0-19.7c-188.7,0-377.4,0-566.1,0c-101,0-201.9,0-302.9,0c-5.4,0-9.8,4.5-9.8,9.8c0,38.1,0,76.3,0,114.4c0,5.4,4.5,9.8,9.8,9.8c188.7,0,377.5,0,566.2,0c87.6,0,175.3,0,262.9,0c14.5,0,29,0,43.5,0c23.6,0,29.4-45.5,30-61.3c0.8-24.1-5.3-58.6-28.5-71.4C942.7,448.5,932.8,465.5,943.9,471.6z"/></g>
						</svg>
				  <h4>Bedding</h4>
				  <div class="plus_circle">
					<span></span>
					<span></span>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- our sector section end -->
<!-- brand partners start -->
<div class="st_section brands_partner_section">
   <!-- overlay start -->
	<div class="bg_overlay_white pad_t_b_100">
		<div class="container">
			<div class="row">
				<div class="middle_heading_section">
					<h1>hey! here is our brand partners.</h1>
					<p>Vim clita tritani intellegat eu, epicuri conceptam interpretaris ea est. Legimus mentitum postlant mei ut. Mei ex alii sanctus. </p>
				</div>
				<div class="brands_partner_wrap">
					<div class="col-md-3 col-sm-6 fromleft wow">
						<div class="st_partner_brand_box animation">
							<i class="fa fa-black-tie"></i>
							<img src="{{ asset('suits/images/brand/logo1.png') }}" alt="brand logo">
							<div class="brand_details">
								<i class="fa fa-quote-left"></i>
								<p>At quis ullum epicuri vel, putent insolens.</p>
								<h5>since<br/><span>1992</span></h5>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 fromleft wow" data-wow-duration="1.5s">
						<div class="st_partner_brand_box animation">
							<i class="fa fa-black-tie"></i>
							<img src="{{ asset('suits/images/brand/logo2.png') }}" alt="brand logo">
							<div class="brand_details">
								<i class="fa fa-quote-left"></i>
								<p>Li Europan lingues es membres del sam.</p>
								<h5>since<br/><span>1993</span></h5>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 fromleft wow" data-wow-duration="2s">
						<div class="st_partner_brand_box animation">
							<i class="fa fa-black-tie"></i>
							<img src="{{ asset('suits/images/brand/logo3.png') }}" alt="brand logo">
							<div class="brand_details">
								<i class="fa fa-quote-left"></i>
								<p>Li lingues differe solmen.</p>
								<h5>since<br/><span>1992</span></h5>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 fromleft wow" data-wow-duration="2.5s">
						<div class="st_partner_brand_box animation">
							<i class="fa fa-black-tie"></i>
							<img src="{{ asset('suits/images/brand/logo4.png') }}" alt="brand logo">
							<div class="brand_details">
								<i class="fa fa-quote-left"></i>
								<p> On refusa continuar payar custosi.</p>
								<h5>since<br/><span>1994</span></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!-- overlay start -->
</div>
<!-- brand partners end -->





<!--  brand style section start -->
<div class="st_section st_brand_style_section">
	<!-- overlay start -->
	 <div class="brand_style_wrap pad_t_b_90">
		 <div class="container">
			 <div class="row">
				 <div class="middle_heading_section">
					 <h1>Find your brand style.</h1>
					 <p>Vim clita tritani intellegat eu, epicuri conceptam interpretaris ea est. Legimus mentitum postlant mei ut. Mei ex alii sanctus. </p>
				 </div>
				 <!-- brand 1 start -->
				 <div class="col-md-3 col-sm-6">
					 <div class="brand_style_box zoom_middle wow">
						 <div class="text_box">
							 <h4>New Arrivals</h4>
							 <h3><a href="#">Hurry up!<br/> Refresh your<br/> wardrobe for the</a></h3>
							 <span>Exclusively Online*</span>
						 </div>
						 <div class="st_thumb">
							 <img src="{{ asset('suits/images/brand/thumb_8.jpg') }}" class="img-responsive" alt="thumb">
						 </div>
						 <div class="price_box">
							 <h3><a href="#">Bedding</a></h3>
							 <div><a href="#" class="read_m_btn " style="border-radius: 20px; border-color: antiquewhite;">More</a>
							 </div>
						 </div>
					 </div>
				 </div>
				 <!-- brand 1 end -->
				 <!-- brand 2 start -->
				 <div class="col-md-3 col-sm-6">
					 <div class="brand_style_box zoom_middle wow" data-wow-duration="1.5s">
						 <div class="st_thumb">
							 <img src="{{ asset('suits/images/brand/thumb_7.jpg') }}" class="img-responsive" alt="thumb">
						 </div>
						 <div class="price_box">
							 <h3><a href="#">Bathing</a></h3>
							 <div>
								 <a href="#" class="read_m_btn " style="border-radius: 20px; border-color: antiquewhite;">More</a>
							 </div>
						 </div>
						 <div class="text_box pad_top">
							 <h4>New Arrivals</h4>
							 <h3><a href="#">Hurry up!<br/> Refresh your<br/> wardrobe for the</a></h3>
							 <span>Exclusively Online*</span>
						 </div>
					 </div>
				 </div>
				 <!-- brand 2 end -->
				 <!-- brand 3 start -->
				 <div class="col-md-3 col-sm-6">
					 <div class="brand_style_box zoom_middle wow" data-wow-duration="1.5s">
						 <div class="text_box">
							 <h4>New Arrivals</h4>
							 <h3><a href="#">Hurry up!<br/> Refresh your<br/> wardrobe for the</a></h3>
							 <span>Exclusively Online*</span>
						 </div>
						 <div class="st_thumb">
							 <img src="{{ asset('suits/images/brand/thumb_5.jpg') }}" class="img-responsive" alt="thumb">
						 </div>
						 <div class="price_box">
							 <h3><a href="#">Fashion</a></h3>
							 <div>
								 <a href="#" class="read_m_btn " style="border-radius: 20px; border-color: antiquewhite;">More</a>
							 </div>
						 </div>
					 </div>
				 </div>
				 <!-- brand 3 end -->
				 <!-- brand 4 start -->
				 <div class="col-md-3 col-sm-6">
					 <div class="brand_style_box zoom_middle wow">
						 <div class="st_thumb">
							 <img src="{{ asset('suits/images/brand/thumb_6.jpg') }}" class="img-responsive" alt="thumb">
						 </div>
						 <div class="price_box">
							 <h3><a href="#">Diversified Home Products</a></h3>
							
							 <div>
								 <a href="#" class="read_m_btn " style="border-radius: 20px; border-color: antiquewhite;">More</a>
							 
							 </div>
						 </div>
						 <div class="text_box pad_top">
							 <h4>New Arrivals</h4>
							 <h3><a href="#">Hurry up!<br/> Refresh your<br/> wardrobe for the</a></h3>
							 <span>Exclusively Online*</span>
						 </div>
					 </div>
				 </div>
				 <!-- brand 4 end -->
			 </div>
		 </div>
	 </div>
 </div>
 <!--  brand style section end -->
 




<!-- middle found strip start-->
<div class="st_section st_found_strip pad_t_b_40">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="found_dream_text">
					<h3>Found your <span>Dream</span>? Why wait</h3>
					<p>Get it now with a 0% finance deal from Home Apparels...</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="right_buttons">
					<a href="#" class="read_m_btn">read more </a>
					<a href="#" class="read_m_btn">purchase</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- middle found strip end-->
<!-- special offers section start -->
<div class="st_section st_special_offers">
	<div class="container">
		<div class="row">
			<div class="middle_heading_section">
				<h1>special offers.</h1>
				<p>Vim clita tritani intellegat eu, epicuri conceptam interpretaris ea est. Legimus mentitum postlant mei ut. Mei ex alii sanctus. </p>
			</div>
			<div class="col-lg-12">
				<ul class="offers_list">
					<li class="fromtop wow">
						<div class="left_main">
							<div class="list_para">
								<h3>Super Sever <span>Deals</span> On Kichen Textiles</h3>
								<h4>Deal now with Pure Origins...</h4>
							</div>
							<div class="circle_main">
								<div class="discount_circle" data-value="60">
									<div class="inner_circle">
										<span>up to</span>
										<h3 class="percent" data-to="" data-delay="100" data-speed="3000"></h3>
										<p>cashback</p>
									</div>
								</div>
								<div class="discount_circle" data-value="80">
									<div class="inner_circle">
										<span>up to</span>
										<h3 class="percent" data-to="" data-delay="100" data-speed="3000"></h3>
										<p>cashback</p>
									</div>
								</div>
							</div>
						</div>
						<div class="cashback_box">
							<span>flate</span>
							<h3 class="timer" data-to="20" data-delay="100" data-speed="3000"></h3>
							<p>cashback <br/>Towel</p>
						</div>
					</li>
					<li class="fromtop wow" data-wow-duration="1.5s">
						<div class="left_main">
							<div class="list_para">
								<h3>Top <span>Deals</span> On Bedding</h3>
								<h4>Deal now with  Pure Origins...</h4>
							</div>
							<div class="circle_main">
								<div class="discount_circle" data-value="25">
									<div class="inner_circle">
										<span>up to</span>
										<h3 class="percent" data-to="" data-delay="100" data-speed="3000"></h3>
										<p>cashback</p>
									</div>
								</div>
								<div class="discount_circle" data-value="40">
									<div class="inner_circle">
										<span>up to</span>
										<h3 class="percent" data-to="" data-delay="100" data-speed="3000"></h3>
										<p>cashback</p>
									</div>
								</div>
							</div>
						</div>
						<div class="cashback_box">
							<span>flate</span>
							<h3 class="timer" data-to="20" data-delay="100" data-speed="3000"></h3>
							<p>cashback <br/>Mats</p>
						</div>
					</li>
					<li class="fromtop wow" data-wow-duration="2s">
						<div class="left_main">
							<div class="list_para">
								<h3>Exclusive <span>Deals</span> On Home Products</h3>
								<h4>Deal now with Pure Origins...</h4>
							</div>
							<div class="circle_main">
								<div class="discount_circle" data-value="50">
									<div class="inner_circle">
										<span>up to</span>
										<h3 class="percent" data-to="" data-delay="100" data-speed="3000"></h3>
										<p>cashback</p>
									</div>
								</div>
								<div class="discount_circle" data-value="75">
									<div class="inner_circle">
										<span>up to</span>
										<h3 class="percent" data-to="" data-delay="100" data-speed="3000"></h3>
										<p>cashback</p>
									</div>
								</div>
							</div>
						</div>
						<div class="cashback_box">
							<span>flate</span>
							<h3 class="timer" data-to="20" data-delay="100" data-speed="3000">%</h3>
							<p>cashback <br/>Baskets</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- special offers section end -->
<!--  special discount section start -->
<div class="st_section st_discount_section">
   <!-- overlay start -->
	<div class="bg_overlay_black discount_section_main">
		<div class="container">
			<div class="row">
				<div class="special_dicount_wrap">
					<div class="middle_heading_section">
						<h1>Get Our Special Discount.</h1>
						<p>Vim clita tritani intellegat eu, epicuri conceptam interpretaris ea est. Legimus mentitum postlant mei ut. Mei ex alii sanctus. </p>
					</div>
					<div class="discount_form">
						<form>
							<div class="col-sm-4">
							  <input type="text" name="name" placeholder="NAME" id="your_name" class="dsc_input"> 
							</div>
							<div class="col-sm-4">
							  <input type="email" name="email" placeholder="EMAIL ADDRESS" id="your_email" class="dsc_input"> 
							</div>
							<div class="col-sm-4">
							  <button type="button" class="coupon_btn read_m_btn">GET YOUR COUPON NOW</button>
							</div>
							<div class="col-lg-12"><p id="coupon_err"></p></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--  special discount section end -->



    
@endsection