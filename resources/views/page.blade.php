@extends('layouts_page.master')
@section('title')
<title>Min Store</title>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('minstore/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{asset('minstore/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('minstore/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('minstore/styles/responsive.css') }}">
@endsection

@section('js')
<script src="{{asset('minstore/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('minstore/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('minstore/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{asset('minstore/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('minstore/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('minstore/plugins/easing/easing.js')}}"></script>
<script src="{{asset('minstore/js/custom.js')}}"></script>
<script>
	function addToCart(event)
		{
			event.preventDefault();
			let urlcart = $(this).data('url');
			$.ajax({
				type:'GET',
				url: urlcart,
				dataType: 'json',
				success: function(data){
					if(data.code ===200)
					{
						alert('Đã thêm sản phẩm vào giỏ hàng');
					}
				},
				error: function(){

				}
			})
		}

		$(function()
		{
			$('.add_to_cart').on('click',addToCart)
		});

</script>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
	var chatbox = document.getElementById('fb-customer-chat');
	  chatbox.setAttribute("page_id", "101976562773239");
	  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
	window.fbAsyncInit = function() {
		FB.init({
		  xfbml            : true,
		  version          : 'v15.0'
		});
	  };
	
	  (function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));
</script>
@endsection