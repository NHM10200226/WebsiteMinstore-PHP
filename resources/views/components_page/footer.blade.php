<!-- Newsletter -->

<div class="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div
					class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
					<h4>Newsletter</h4>
					<p>{{ getConfigValueFromSettingTable('sale') }}</p>
				</div>
			</div>
			<div class="col-lg-6">
				<form action="post">
					<div
						class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
						<input id="newsletter_email" type="email" placeholder="Your email" required="required"
							data-error="Valid email is required.">
						<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
							value="Submit">subscribe</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Footer -->

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div
					class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
					<ul class="footer_nav">
						<li><a href="https://www.facebook.com/profile.php?id=100088751558012">Blog: {{
								getConfigValueFromSettingTable('blog') }}</a></li>
						<li><a href="#">Email: {{ getConfigValueFromSettingTable('email') }}</a></li>
						<li><a href="contact">Contact: {{ getConfigValueFromSettingTable('contactus') }}</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div
					class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
					<ul>
						<li><a href="{{ getConfigValueFromSettingTable('facebook_link') }}"><i class="fa fa-facebook"
									aria-hidden="true"></i></a></li>
						<li><a href="{{ getConfigValueFromSettingTable('twitter_link') }}"><i class="fa fa-twitter"
									aria-hidden="true"></i></a></li>
						<li><a href="{{ getConfigValueFromSettingTable('instagram_link') }}"><i class="fa fa-instagram"
									aria-hidden="true"></i></a></li>
						<li><a href="{{ getConfigValueFromSettingTable('Pinterest_link') }}"><i class="fa fa-pinterest"
									aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="footer_nav_container">
					<h4>{{ getConfigValueFromSettingTable('footer_infor') }}</h4>
				</div>
			</div>
		</div>
	</div>
</footer>