
@php
$baseUrl = config('app.base_url');
@endphp
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		@foreach ($sliders as $slider ) 
		@endforeach

	  <div class="carousel-item active">
		<div class="main_slider" style="background-image:url({{ $baseUrl . $slider->image_path  }})"> 
			<div class="container fill_height">
				<div class="row align-items-center fill_height">
					<div class="col">
						<div class="main_slider_content">
							<h1>{{ $slider->name }}</h1>
							<p>{{ $slider->description }}</p> 
							<div class="red_button shop_now_button"><a href="/categories">shop now</a></div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>

		@foreach ($sliders as $slider ) 
		<div class="carousel-item">
		<div class="main_slider" style="background-image:url({{ $baseUrl . $slider->image_path  }})"> 
			<div class="container fill_height">
				<div class="row align-items-center fill_height">
					<div class="col">
						<div class="main_slider_content">
							<h1>{{ $slider->name }}</h1>
							<p>{{ $slider->description }}</p> 
							<div class="red_button shop_now_button"><a href="#">shop now</a></div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
	@endforeach

	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
  
