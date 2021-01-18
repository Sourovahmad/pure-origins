<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2021 Abasas Technologies Inc.
********************************************************************************************************** -->
<!-- 
Template Name: Abasas Fashion - Business Portfolio HTML Template
Version: 1.0.0
Author: Ruhul Amin
-->
<html lang="en">
<head>
<title>Abasas Suits - Business Portfolio HTML Template</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="suits" />
<meta name="keywords" content="Suits, html template, Suits template">
<meta name="author" content="funtionthemes" />
<meta name="MobileOptimized" content="320" />
<!--srart theme style -->
<link href="{{ asset('suits/css/main.css') }}" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
<!-- favicon-icon -->
<link rel="icon" type="image/icon" href="{{ asset('suits/images/icon/favicon.ico') }}">
<!-- favicon-icon -->
</head>
<!-- END HEAD -->
<!--body start-->
<body>
<!--  loader start -->
	<div class="suit_loader">
		<div class="loader_cover">
			<img src="{{ asset('suits/images/icon/loading_img.gif') }}" alt="loading_icon">
		</div>
	</div>
<!--  loader end -->




          @yield('content')
           

          {{-- Footer Section was here --}}

          @include('includes.footer')


<!-- jquery library js -->
<script type="text/javascript" src="{{ asset('suits/js/jquery.min.js') }}"></script> 
<!-- jquery library js -->
<!-- bootstrap js file-->
<script type="text/javascript" src="{{ asset('suits/js/bootstrap.min.js') }}"></script> 
<!-- bootstrap js file-->
<!-- slider -->
<script type="text/javascript" src="{{ asset('suits/js/plugins/slider/js/swiper.min.js') }}"></script> 
<!-- slider -->
<!-- animation -->
<script type="text/javascript" src="{{ asset('suits/js/plugins/animation/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('suits/js/plugins/animation/jquery.appear.js') }}"></script>
<!-- animation-->
<!--  count js -->
<script type="text/javascript" src="{{ asset('suits/js/plugins/piechart/jquery.countTo.js') }}"></script>
<!--   count js  -->
<script type="text/javascript" src="{{ asset('suits/js/custom.js') }}"></script> 
<!-- custom js -->
<script>
	document.getElementsByClassName("button_next")[0].click();

 
setInterval(function () {
	document.getElementsByClassName("button_next")[0].click();
}, 2500); 


</script>
</body>
<!--body end -->

</html>