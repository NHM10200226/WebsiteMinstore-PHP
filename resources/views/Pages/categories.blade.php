

<head>
	<title>Min Store</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('minstore/styles/bootstrap4/bootstrap.min.css')}}">
	<link href="{{asset('minstore/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/OwlCarousel2-2.2.1/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('minstore/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('minstore/styles/categories_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('minstore/styles/categories_responsive.css')}}">
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
							<li class="active"><a href="/categories"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Men's</a></li>
						</ul>
					</div>

					<!-- Sidebar -->

					<div class="sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Product Category</h5>
							</div>

							<ul class="sidebar_categories">
								<strong><li><a href="/categories">All</a></li></strong>

								@foreach ($categorys as $category)
								<div class="panel panel-default">
									<div class="panel-heading">

										@if ($category->categoryChildrent->count())

										<a data-toggle="collapse" data-parent="#accordian" href="#{{ $category->id }}">
											<span class="badge pull-right">
											<i class="fa fa-plus"></i>
										</span>
										{{ $category->name }}
									</a>
									@else
									<a href="{{ route('category.product',
									['slug'=>$category->slug,'id'=>$category->id]) }}">
										<span class="badge pull-right">
										</span>
										{{ $category->name }}
									</a>
											@endif
											

									</div>
									<div id="{{ $category->id }}" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>

												@foreach ($category->categoryChildrent as $categoryChildrent )
												<li>
													<a href="{{ route('category.product',
													['slug'=>$categoryChildrent->slug,'id'=>$categoryChildrent->id]) }}">
													{{ $categoryChildrent->name }}
													</a>
												</li>
												@endforeach
												
												
											</ul>
										</div>
									</div>
								</div>
								@endforeach
				

							</ul>
						</div>

						<!-- Price Range Filtering -->
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Filter by Price</h5>
							</div>
							<p>
								<input type="text" id="amount" readonly
									style="border:0; color:#f6931f; font-weight:bold;">
							</p>
							<div id="slider-range"></div>
							<div class="filter_button"><span>filter</span></div>
						</div>

						<!-- Sizes -->
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Sizes</h5>
							</div>
							<ul class="checkboxes">
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>S</span></li>
								<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>M</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>L</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XL</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XXL</span></li>
							</ul>
						</div>

						<!-- Color -->
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Color</h5>
							</div>
							<ul class="checkboxes">
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Black</span></li>
								<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Pink</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
								<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
							</ul>
							<div class="show_more">
								<span><span>+</span>Show More</span>
							</div>
						</div>

					</div>

					<!-- Main Content -->

					<div class="main_content">

						<!-- Products -->

						<div class="products_iso">
							<div class="row">
								<div class="col">

									<!-- Product Sorting -->

									<div class="product_sorting_container product_sorting_container_top">
										<ul class="product_sorting">
											<li>
												<span class="type_sorting_text">Default Sorting</span>
												<i class="fa fa-angle-down"></i>
												<ul class="sorting_type">
													<li class="type_sorting_btn"
														data-isotope-option='{ "sortBy": "original-order" }'>
														<span>Default Sorting</span>
													</li>
													<li class="type_sorting_btn"
														data-isotope-option='{ "sortBy": "price" }'><span>Price</span>
													</li>
													<li class="type_sorting_btn"
														data-isotope-option='{ "sortBy": "name" }'><span>Product
															Name</span></li>
												</ul>
											</li>
											<li>
												<span>Show</span>
												<span class="num_sorting_text">6</span>
												<i class="fa fa-angle-down"></i>
												<ul class="sorting_num">
													<li class="num_sorting_btn"><span>1</span></li>
													<li class="num_sorting_btn"><span>3</span></li>
													<li class="num_sorting_btn"><span>6</span></li>
													<li class="num_sorting_btn"><span>12</span></li>
												</ul>
											</li>
										</ul>
										<div class="pages d-flex flex-row align-items-center">
											<div class="page_current">
												<span>1</span>
												<ul class="page_selection">
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
												</ul>
											</div>
											{{-- <div class="page_total"><span>of</span> 3</div> --}}
											<div id="next_page" class="page_next"><a href="#"><i
														class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
										</div>

									</div>

									<!-- Product Grid -->

									<div class="product-grid">

										@php
										$baseUrl = config('app.base_url');
										@endphp
										@foreach ($products as $product)
											<!-- Product  -->

										<div class="product-item men">
											<div class="product discount product_filter">
												<div class="product_image">
													<img src="{{ $baseUrl . $product->feature_image_path }}" alt="">
												</div>
												<div class="favorite favorite_left"></div>
												<div
													class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span>Sale</span>
												</div>
												<div class="product_info">
													<h6 class="product_name"><a href="/single/{{ $product->id }}">{{ $product->name }}</a></h6>
													<div class="product_price">${{ number_format($product->price) }}<span>{{ number_format($product->price + 50) }}</span></div>
												</div>
											</div>
											<div class="red_button add_to_cart_button">
												<a class="red_button add_to_cart_button add_to_cart" 
												href="#"
												data-url="{{ route('addToCart',['id' => $product->id]) }}"
												>add to cart</a>
											</div>
										</div>
										@endforeach
										

									</div>

									<!-- Product Sorting -->

									<div class="product_sorting_container product_sorting_container_bottom clearfix">
										<ul class="product_sorting">
											<li>
												<span>Show:</span>
												<span class="num_sorting_text">04</span>
												<i class="fa fa-angle-down"></i>
												<ul class="sorting_num">
													<li class="num_sorting_btn"><span>01</span></li>
													<li class="num_sorting_btn"><span>02</span></li>
													<li class="num_sorting_btn"><span>03</span></li>
													<li class="num_sorting_btn"><span>04</span></li>
												</ul>
											</li>
										</ul>
										{{-- <span class="showing_results">Showing 1–3 of 12 results</span> --}}
										<div class="pages d-flex flex-row align-items-center">
											<div class="page_current">
												<span>1</span>
												<ul class="page_selection">
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
												</ul>
											</div>
											{{-- <div class="page_total"><span>of</span> 3</div> --}}
											<div id="next_page_1" class="page_next"><a href="#"><i
														class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
										</div>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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
</body>
