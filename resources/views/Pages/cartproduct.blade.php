

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
{{-- Cart --}}
<div class="cart_wrapper">
<div class="cart" data-url="{{ route('deleteCart') }}">
  <section class="">
	<h3 class="mb-4 billing-heading">My Cart</h3>
          <div class="container">
              <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="cart-list">
                      <table class="table update_cart_url" data-url="{{ route('updateCart') }}">
                          <thead class="thead-primary">
                            <tr class="text-center">
                              <th>#</th>
                              <th>Image</th>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Sub Total</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                                $total=0;
                            @endphp
							
						{{--  --}}
							
						@foreach ($carts as $id=>$cartItem)
						@php
						$total += $cartItem['price'] * $cartItem['quantity'] ;
						@endphp

						<tr class="text-center">
							<th scope="row">{{ $id }}</th>
					  <td class="image-prod"><div class="img" style="background-image:url({{ $cartItem['image'] }});"></div></td>
					  <td class="product-name">
						  <h3>{{ $cartItem['name'] }}</h3>
						</td>
					  <td class="price">$ {{ $cartItem['price'] }}</td>
					  <td class="quantity">
						  <div class="input-group mb-3">
						   <input type="text" name="quantity"
							class="quantitymin" value="{{ $cartItem['quantity'] }}" min="1" max="100" required="required">
						</div>
					</td>
					<td class="price">$ {{ number_format($cartItem['price'] * $cartItem['quantity'])}}</td>
					<td class="">
						<a data-id="{{ $id }}" class="btn btn-primary cart_update">Update</a>
						<a data-id="{{ $id }}" class="btn btn-danger cart_delete">Delete</a>
					</td>
					</tr><!-- END TR-->
					@endforeach
						{{--  --}}


                          </tbody>
                        </table>
                        <div class="col-md-12">
                            <h2 align="center">Total: $ {{ number_format($total) }}</h2>
                        </div>
                    </div>
              </div>
          </div>
              <div class="cart-wrap">
                  <p class="text-center"><a href="/" class="btn btn-primary py-3 px-4">Back to shopping</a></p>
				  @if ($carts==[])
				  <p class="text-center"><a href="/categories" class="btn btn-primary py-3 px-4">Your shopping cart is empty! Shop now</a></p>
				  @else
				  <p class="text-center"><a href="/shipping" class="btn btn-primary py-3 px-4">Go to payment</a></p>

				  @endif

              </div>
			  <hr>

          </div>
      </section>
    </div>
</div>

{{-- End cart --}}
{{-- Order --}}
{{-- @include('Pages.checkout') --}}
{{-- End order --}}

		<!-- Benefit -->

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

    <script>
        function cartUpdate(event)
		{
			event.preventDefault();
            let urlupdateCart = $('.update_cart_url').data('url');
            let id = $(this).data('id');
            let quantity = $(this).parents('tr').find('input.quantitymin').val();

            $.ajax({
                type:'GET',
				url: urlupdateCart,
                data: {id: id, quantity: quantity },
				success: function(data){
                    if(data.code === 200)
					{
						$('.cart_wrapper').html(data.showcartproduct);
                        alert('Đã cập nhật thành công');
						location.reload();
					}
				},
				error: function(){

				}
            });
        }

        function cartDelete(event)
		{
			event.preventDefault();
            let urldeleteCart = $('.cart').data('url');
            let id = $(this).data('id');

            $.ajax({
                type:'GET',
				url: urldeleteCart,
                data: {id: id },
				success: function(data){
                    if(data.code ===200)
					{
						$('.cart_wrapper').html(data.showcartproduct);
                        alert('Đã xóa thành công');
						location.reload();
					}
				},
				error: function(){

				}
            });
        }
		$(function()
		{
			$(document).on('click','.cart_update',cartUpdate)
			$(document).on('click','.cart_delete',cartDelete)
		});
    </script>
</body>
