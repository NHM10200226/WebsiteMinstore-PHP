

<head>
	<title>Min Store</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{asset('minstore/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/OwlCarousel2-2.2.1/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('minstore/styles/categories_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('minstore/styles/categories_responsive.css')}}">
    {{-- Cart --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('minstore/cartandcheckout/css/style.css') }}">
</head>

<body>

	<div class="super_container">

		@include('components_page.header')

		<div class="fs_menu_overlay"></div>

		<!-- Hamburger Menu -->

		<div class="hamburger_menu">
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="hamburger_menu_content text-right">
				<ul class="menu_top_nav">
					<li class="menu_item has-children">
						<a href="#">
							usd
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">cad</a></li>
							<li><a href="#">aud</a></li>
							<li><a href="#">eur</a></li>
							<li><a href="#">gbp</a></li>
						</ul>
					</li>
					<li class="menu_item has-children">
						<a href="#">
							English
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">French</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">German</a></li>
							<li><a href="#">Spanish</a></li>
						</ul>
					</li>
					<li class="menu_item has-children">
						<a href="#">
							My Account
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="login"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
							<li><a href="login"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
						</ul>
					</li>
					<li class="menu_item"><a href="/">home</a></li>
					<li class="menu_item"><a href="/categories">product</a></li>
					<li class="menu_item"><a href="#">promotion</a></li>
					<li class="menu_item"><a href="#">pages</a></li>
					<li class="menu_item"><a href="#">blog</a></li>
					<li class="menu_item"><a href="/contact">contact</a></li>
				</ul>
			</div>
		</div>
		<div class="container product_section_container">
			<div class="row">
				<div class="col product_section clearfix">

					<!-- Breadcrumbs -->

					<div class="breadcrumbs d-flex flex-row align-items-center">
						<ul>
							<li><a href="/">Home</a></li>
							<li class="active"><a href="/showcart"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Cart</a></li>
						</ul>
					</div>
{{--  --}}
<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 ftco-animate">
                <h3 class="mb-4 billing-heading">Start payment</h3>
            <div class="row align-items-end">
                  <div class="col-md-12">
                    <form action="" class="billing-form" method="POST">
                        @csrf
						<label for="phone">Full name</label>
						<input type="text" name="shipping_name" class="form-control" placeholder="Full name" required="required">
                        <hr>
                        <label for="country">City / Town</label>
                        <select name="shipping_city" id="" class="form-control">
							<option>Thành phố Hồ Chí Minh</option>
							<option>An Giang</option>
							<option>Bà rịa–Vũng tàu</option>
							<option>Bắc Giang</option>
							<option>Bắc Kạn</option>
							<option>Bạc Liêu</option>
							<option>Bắc Ninh</option>
							<option>Bến Tre</option>
							<option>Bình Định</option>
							<option>Bình Dương</option>
							<option>Bình Phước</option>
							<option>Bình Thuận</option>
							<option>Cà Mau</option>
							<option>Cần Thơ</option>
							<option>Cao Bằng </option>
							<option>Đà Nẵng</option>
							<option>Đắk Lắk</option>
							<option>Đắk Nông</option>
							<option>Điện Biên</option>
							<option>Đồng Nai</option>
							<option>Đồng Tháp</option>
							<option>Gia Lai</option>
							<option>Hà Giang</option>
							<option>Hà Nam</option>
							<option>Hà Nội </option>
							<option>Hà Tĩnh</option>
							<option>Hải Dương</option>
							<option>Hải Phòng</option>
							<option>Hậu Giang</option>
							<option>Hòa Bình</option>
							<option>Hưng Yên</option>
							<option>Khánh Hòa</option>
							<option>Kiên Giang</option>
							<option>Kon Tum</option>
							<option>Lai Châu</option>
							<option>Lâm Đồng</option>
							<option>Lạng Sơn</option>
							<option>Lào Cai</option>
							<option>Long An</option>
							<option>Nam Định</option>
							<option>Nghệ An</option>
							<option>Ninh Bình</option>
							<option>Ninh Thuận</option>
							<option>Phú Thọ</option>
							<option>Phú Yên</option>
							<option>Quảng Bình</option>
							<option>Quảng Nam</option>
							<option>Quảng Ngãi</option>
							<option>Quảng Ninh</option>
							<option>Quảng Trị</option>
							<option>Sóc Trăng</option>
							<option>Sơn La</option>
							<option>Tây Ninh</option>
							<option>Thái Bình</option>
							<option>Thái Nguyên</option>
							<option>Thanh Hóa</option>
							<option>Thừa Thiên Huế</option>
							<option>Tiền Giang</option>
							<option>Trà Vinh</option>
							<option>Tuyên Quang</option>
							<option>Vĩnh Long</option>
							<option>Vĩnh Phúc</option>
							<option>Yên Bái</option>
                        </select>
                        <hr>
						<label for="phone">Address</label>
						<input type="text" name="shipping_address" class="form-control" placeholder="County, District, Town,..." required="required">
                        <hr>
                      <label for="phone">Number phone</label>
                      <input type="text" name="shipping_phone" class="form-control" placeholder="Number phone" required="required">
                      <hr>
                      <label for="emailaddress">Email Address</label>
                      <input type="text" name="shipping_email" class="form-control" placeholder="Email Address" required="required">
                      <hr>
                      <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="radio">
                                    <h4>Method payment</h4>
                                   <label><input type="radio" name="shipping_method" class="mr-2" value="Pay upon delivery" required="required"> Pay upon delivery</label>
                                   <hr>
                                   <label><input type="radio" name="shipping_method" class="mr-2" value="Banking" required="required"> Banking</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                <div class="col-md-12">
					<div class="radio">
						<label><input type="checkbox" name="shipping_accept" value="I have read and accept the terms and conditions" class="mr-2" required="required"> I have read and accept the terms and conditions</label>
					</div>
				</div>
			</div>
            <hr>
			<div class="cart-wrap ">
					<input type="submit" class="btn btn-primary py-3 px-4 " name="submit" value="Place an orde">
			</div>
            <hr>
			<div class="cart-wrap">
                <p class="text-center"><a href="/showcart" class="btn btn-primary py-3 px-4">Back to Cart</a></p>
			</div>
</form>
            </div>
        <!-- END -->
    </div> <!-- .col-md-8 -->

    
      </div>
    </div>
  </section> <!-- .section -->

  
  <div class="benefit">
    <div class="container">
        <div class="row benefit_row">
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>free shipping</h6>
                        <p>Suffered Alteration in Some Form</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>cach on delivery</h6>
                        <p>The Internet Tend To Repeat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>45 days return</h6>
                        <p>Making it Look Like Readable</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>opening all week</h6>
                        <p>8AM - 09PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components_page.footer')


</div>

<script src="{{ asset('minstore/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('minstore/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('minstore/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('minstore/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('minstore/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('minstore/plugins/easing/easing.js')}}"></script>
<script src="{{asset('minstore/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{ asset('minstore/js/categories_custom.js') }}"></script>
{{-- Cart --}}
<script src="{{ asset('minstore/cartandcheckout/js/jquery.min.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/popper.min.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/aos.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/scrollax.min.js') }}"></script>
<script src="{{ asset('minstore/cartandcheckout/js/main.js') }}"></script>


</body>