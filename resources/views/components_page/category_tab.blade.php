
		<div class="new_arrivals">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title new_arrivals_title">
							<h2>New Arrivals</h2>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col text-center">
						<div class="new_arrivals_sorting">
							<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
								<a href="/categories">
									<li class="btn btn-danger">All product</li>
								</a>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="product-grid"
							data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

							@php
								$baseUrl = config('app.base_url');
							@endphp
							@foreach ($products as $product)
								<!-- Product -->
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
												<div class="product_price">{{'$'. number_format($product->price) }}<span>{{ '$'. number_format($product->price + 100) }}</span></div>
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
					</div>
				</div>
			</div>
		</div>