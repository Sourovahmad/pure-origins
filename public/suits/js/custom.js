/*
Copyright (c) 2016 Suits
------------------------------------------------------------------
[Master Javascript]

Project: Suits

-------------------------------------------------------------------*/
(function($) {
	"use strict";
	var Suits = {
		initialised: false,
		version: 1.0,
		mobile: false,
		init: function() {
			if (!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}
			/*-------------- Suits Functions Calling ---------------------------------------------------
			------------------------------------------------------------------------------------------------*/
			this.RTL();
			this.Navigation();
			this.dropdown_menu();
			this.header_search_form();
			this.home_slider();
			this.shop_slider();
			this.suit_wear_crousel();
			this.home_second_slider();
			this.portfolio_crousel();
			this.portfolio_scroll_slider();
			this.product_crousel_wrap();
			this.blog_review_slider();
			this.product_popup();
			this.discount_chart();
			this.piechart_circle();
			this.piechart_timer();
			this.video_gallery();
			this.video_popup();
			this.growing_bar();
			this.footer_form();
			this.MailFunction();
			this.couponmail();
			this.subscribe_mail();
			this.animation();
		},
		/*-------------- Suits Functions definition ---------------------------------------------------
		---------------------------------------------------------------------------------------------------*/
		RTL: function() {
			// On Right-to-left(RTL) add class 
			var rtl_attr = $("html").attr('dir');
			if (rtl_attr) {
				$('html').find('body').addClass("rtl");
			}
		},
		//Navigation
		Navigation: function () {
			$(".st_header_strip .nav_toggle").on("click", function(){
				$(this).toggleClass("open_toggle");
				$(".header_icons").toggleClass("unvisible");
				$(".navigation_overlay").toggleClass("menu_open");
			});
			
			//navigation second
			$(".home_second_header .nav_toggle").on("click", function(){
				$(".st_navigation").toggleClass("second_menu_open");
			});
		},
		//dropdown menu
		dropdown_menu: function (){
			if ($(window).width () < 991){
			$(".st_navigation ul li ul.sub-menu").parents("li").addClass("dropdown_toggle");
			$(".dropdown_toggle").append("<span class='caret_down'></span>");
			$(".st_navigation ul li").children(".caret_down").on("click",function(){
				$(this).toggleClass("caret_up")
				//$('.st_navigation ul li .caret_down').not(this).parents("li").children("ul").slideUp();
				$(this).prev("ul").slideToggle();
			});
			}
			else {
				
			}
		},
		//header search form
		header_search_form:function(){
			$(".header_icons .nav_search").on("click", function(){
				$(this).toggleClass("close_cross");
				$(this).children("i").toggleClass("fa-close");
				$(".header_search_form").toggleClass("search_form_open");
				
			});
			var from_height = $(window).height();
			$(".header_search_form").css("height", from_height);
		},
		
		//home slider 
		home_slider:function(){
		  if($('.syncro_image, .syncro_thumb').length > 0){
			var galleryTop = new Swiper('.syncro_image', {
				loop:true,
				nextButton: '.button_next',
				prevButton: '.button_prev',
				autoplay: false,
				spead:4000,
				effect:'fade'
			});
			var galleryThumbs = new Swiper('.syncro_thumb', {
				loop:true,
				slidesPerView: 1,
				paginationClickable: true,
				autoplay: false,
				spead:10000
			});
			galleryTop.params.control = galleryThumbs;
			galleryThumbs.params.control = galleryTop;
			
		  }
		  //slider fullscreen
		  if($(window).width () > 1200 ){
			  var slider_height = $(window).outerHeight();
			  $(".home_slider_main").css("height", slider_height);
		  }
		},
		
		//shop slider
		shop_slider:function(){
		  if($('.shop_slider_thumb, .slider_text').length > 0){
			var sliderthumb = new Swiper('.shop_slider_thumb', {
				loop:true,
				prevButton: '.button_prev',
				nextButton: '.button_next',
				simulateTouch:false,
				autoplay: 3000,
				spead:3000,
			});
			var slidertext = new Swiper('.slider_text', {
				loop:true,
				simulateTouch:false,
				slidesPerView: 1,
				autoplay: 3000,
				spead:3000,
			});
			sliderthumb.params.control = slidertext;
			slidertext.params.control = sliderthumb;
			
		  }
		},
		
		//suit wear crousel
		suit_wear_crousel:function(){
			if($('.suit_wear_crousel').length > 0){
				var swiper = new Swiper('.suit_wear_crousel', {
					slidesPerView: 3,
					paginationClickable: true,
					autoplay: 3000,
					breakpoints: {
						1024: {
							slidesPerView: 3
						},
						768: {
							slidesPerView: 2
						},
						640: {
							slidesPerView: 2
						},
						500: {
							slidesPerView: 1
						}
					}
					
				});
			}
		},
		
		//home second slider
		home_second_slider:function(){
			$("#home_second_slider").carousel({
				interval:3000,
				loop:true
			});
		},
		
		//portfolio crousel
		portfolio_crousel:function(){
			if($('.portfolio_crousel').length > 0){
				var swiper = new Swiper('.portfolio_crousel', {
					loop:true,
					slidesPerView: 4,
					nextButton: '.button_next',
					prevButton: '.button_prev',
					paginationClickable: true,
					autoplay: false,
					spaceBetween:30,
					breakpoints: {
						1200: {
							slidesPerView:3,
							spaceBetween:20
						},
						1024: {
							slidesPerView:3,
							spaceBetween:20
						},
						768: {
							slidesPerView: 2,
							spaceBetween:20
						},
						640: {
							slidesPerView: 2,
							spaceBetween:15
						},
						480: {
							slidesPerView: 1
						}
					}
				});
			}
		},
		
		//portfolio scroll slider
		portfolio_scroll_slider:function (){
			if($('#drag_slider').length > 0){
				//dragslider
				new Dragdealer('drag_slider', {
					x: window.location.hash == '#runner' ? 1 : 0,
					steps: 2,
					animationCallback: function(x) {
						$('.content_slides').css('margin-left', (-x * 100) + '%');
						if (x > 0.5) {
							$('#portfolio_content .swiper_wrapper').height($('#portfolio_content .swiper_wrapper').height());
						} else {
							$('#portfolio_content .swiper_wrapper').height('auto');
						}
					}
				});
			}
		},
		
		//product crousel
		product_crousel_wrap:function(){
			if($('.product_crousel_wrap').length > 0){
				var swiper = new Swiper('.product_crousel_wrap', {
					slidesPerView: 4,
					slidesPerColumn: 2,
					prevButton: '.button_prev_round',
					nextButton: '.button_next_round',
					paginationClickable: true,
					autoplay: false,
					spaceBetween:30,
					breakpoints: {
						1200: {
							slidesPerView:3,
							spaceBetween:20
						},
						1024: {
							slidesPerView:3,
							spaceBetween:20
						},
						768: {
							slidesPerView: 2,
							spaceBetween:20
						},
						640: {
							slidesPerView: 2,
							spaceBetween:15
						},
						480: {
							slidesPerView: 1
						}
					}
				});
			}
		},
		
		//blog slider
		blog_review_slider:function(){
			if($('.blog_review_slider').length > 0){
				var swiper = new Swiper('.blog_review_slider', {
					loop:true,
					slidesPerView: 2,
					prevButton: '.button_prev',
					nextButton: '.button_next',
					paginationClickable: true,
					autoplay: 3000,
					spead:5000,
					breakpoints: {
						1200: {
							slidesPerView:2
						},
						1024: {
							slidesPerView:2
						},
						768: {
							slidesPerView: 2
						},
						767: {
							slidesPerView: 1
						}
					}
				});
			}
		},
		
		//product_popup
		product_popup :function(){
			$(".popup_close").on("click", function(){
				$(this).parents(".product_popup_wrapper").fadeOut("1000");
			});
			
			//product popup height
			if ($(window).width() < 768 ){
				var popup_height= $(window).outerHeight()-30;
				$(".product_inner").css("height",popup_height);
			}
		},
		
		//discount_chart
		discount_chart:function (){
			$('.discount_circle').each(function(){
				var data_val = $(this).attr('data-value'),
				data_left_val = 100 - data_val,
				data_right_val =  data_left_val + 10,
				per1 = data_left_val,
				per2 = 0,
				per3 = data_right_val,
				col1 = "transparent",
				col2 = "transparent",
				col3 = '#00ac7a';
				$(this).css({background: "linear-gradient(-90deg, "+col1+" "+per1+"%, "+col2+" "+per2+"%, "+col3+" "+per3+"%)" });
				var percent_val = $(this).attr('data-value')
				$(this).find (".percent").attr ("data-to",percent_val);
			});
		},
		
		//piechart circle
		piechart_circle:function(){
			if ($(".month_chart").length > 0 ){
				$('.month_chart').appear(function() {
					$('.month_chart').easyPieChart({
						easing: 'easeIn',
						animate: 1000,
						barColor: '#ffffff',
						trackColor: false,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: 5,
						rotate:180,
						// onStep: function(value) {
							// this.$el.find('span').text(~~value + 'Days');
						// }
					});
				});
			}
			if ($(window).width () > 991){
				var counter_height = $(".upcoming_event_part").outerHeight();
				$(".left_countdown_part").css("height",counter_height);
			}
		},
		//timer
		piechart_timer:function (){
			if ($(".timer, .percent").length > 0 ){
				$('.timer, .percent').appear(function() {
					$('.timer, .percent').each(count);
					function count(options) {
						var $this = $(this);
						options = $.extend({}, options || {}, $this.data('countToOptions') || {});
						$this.countTo(options);
					}
				});
			}
			
		},
	
		//video gallery
		video_gallery:function(){
			if($('.open_video').length > 0){
				$('.open_video').magnificPopup({
					disableOn: 700,
					type: 'inline',
					mainClass: 'video_zoom',
					removalDelay: 160,
					preloader: false,
					// gallery: {
						// enabled: true,
						// navigateByImgClick: true,
						// preload: [0,1] // Will preload 0 - before current, and 1 after the current image
					// }
				});
			}
		},
		
		//video_popup
		video_popup:function(){
			if($('.watch_video').length > 0){
				$('.watch_video').magnificPopup({
					disableOn: 700,
					type: 'iframe',
					mainClass: 'video_zoom',
					removalDelay: 160,
					preloader: false,
				});
			}
			if($('.portfolio_thumb .play_btn').length > 0){
				$('.portfolio_thumb .play_btn').magnificPopup({
					disableOn: 700,
					type: 'iframe',
					mainClass: 'video_zoom',
					removalDelay: 160,
					preloader: false,
				});
			}
			
		},
		growing_bar:function (){
			if($('#growing_bar li .bar').length > 0){
				$('.bar').appear(function() {
					$("#growing_bar li .bar").each(function(key, bar){
						var percentage = $(this).attr('data-percentage');
						$(this).animate({'height':percentage+'%'}, 1000);
						$(this).next("span").text(percentage+'%').delay(1000);
					});
				});
			}
		},
		
		footer_form:function () {
			$(".footer_form .close_btn").on("click", function(){
			$(this).toggleClass("open_btn");
			$(".footer_form form").slideToggle();
			});
		},
		
		// mail function
        MailFunction:function(){
			//help mail function	
			$('.footer_form .send_btn').on('click', function(){
				var em=$('#help_email').val();
				var ques_1=$('#help_ques').val();
				var ques_2=$('#help_ques_2').val();
				var ques_3=$('#help_ques_3').val();
				
				$.ajax({
					type: "POST",
					url: "helpmail.php",
					data: {
						'useremail':em,
						'userques_1':ques_1,
						'userques_2':ques_2,
						'userques_3':ques_3,
						},
					success: function(msg) {
						var full_msg=msg.split("#");
						if(full_msg[0]=='1'){
							$('#help_email').val("");
							$('#help_ques').val("");
							$('#help_ques_2').val("");
							$('#help_ques_3').val("");
							$('#err').html( full_msg[1] );
						}
						else{
							$('#help_email').val(em);
							$('#help_ques').val(ques_1);
							$('#help_ques_2').val(ques_2);
							$('#help_ques_3').val(ques_3);
							$('#err').html( full_msg[1] );
						}
					}
				});
			});
		},
		
		//coupon mail
		couponmail:function(){
			$('.discount_form .coupon_btn').on('click', function(){
				var name=$('#your_name').val();
				var email=$('#your_email').val();
				
				$.ajax({
					type: "POST",
					url: "coupon_mail.php",
					data: {
						'username':name,
						'useremail':email,
						},
					success: function(msg) {
						var full_msg=msg.split("#");
						if(full_msg[0]=='1'){
							$('#your_name').val("");
							$('#your_email').val("");
							$('#coupon_err').html( full_msg[1] );
						}
						else{
							$('#your_name').val(name);
							$('#your_email').val(email);
							$('#coupon_err').html( full_msg[1] );
						}
					}
				});
			});
			
		},
		
		//subscribe_mail
		subscribe_mail:function(){
			$('.news_sub').on('click', function(){
				var email=$('#news_email').val();
				
				$.ajax({
					type: "POST",
					url: "subscribe_mail.php",
					data: {
						'useremail':email
						},
					success: function(msg) {
						var full_msg = msg.split("#");
						if(full_msg[0]=='1'){
							$('#news_email').val("");
							$('#sub_err').html( full_msg[1] );
						}
						else{
							$('#news_email').val(email);
							$('#sub_err').html( full_msg[1] );
						}
					}
				});
			});
		},
		
		animation:function() {
			new WOW().init();
		},

   };
	Suits.init();
	
	//load event
	$(window).load(function() {
		$(".suit_loader").delay(600).fadeOut("slow");
		
		//shop popup
		setTimeout(function(){
		  $('body').addClass("shop_suit_popup");
		}, 5000);
		
	});
	
	//click event
	$(".product_tab_menu ul li a").on("click",function(e) {
		e.preventDefault();
		$(".product_tab_menu ul li a").removeClass("active");
		$(this).addClass("active");
	});

})(jQuery);