<div class="container">
	<section class="main-section contact" id="contact">

		<div class="row">
			<div class="col-lg-6 col-sm-7 wow fadeInLeft">
				<div class="contact-info-box address clearfix">
					<h3><i class=" icon-map-marker"></i>Address:</h3>
					<span>Seoul Mapo-gu Sinchon-ro<br>20 Gil 19</span>
				</div>
				<div class="contact-info-box phone clearfix">
					<h3><i class="fa-phone"></i>Phone:</h3>
					<span>+8210-2117-5879</span>
				</div>
				<div class="contact-info-box email clearfix">
					<h3><i class="fa-pencil"></i>email:</h3>
					<span> 
						<a href="mailto:admin@astrowebstudio.com">admin@astrowebstudio.com</a>
						<a href="mailto:astrowebstudio@gmail.com">astrowebstudio@gmail.com</a>
					</span>
				</div>
				<div class="contact-info-box hours clearfix">
					<h3><i class="fa-clock-o"></i>Hours:</h3>
					<span><strong>Monday - Thursday:</strong> 10am - 10pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
				</div>
				<ul class="social-link">
					@foreach($setting->websitesocialmedias as $socmed)
						<li><a href="{{ $socmed->link }}" target="_blank"><i class="fa fa-{{ $socmed->slug }}"></i></a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-lg-6 col-sm-5 wow fadeInUp delay-02s">
				<div class="form">
					<div class="form-group">
						<input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" required/>
						<div class="help-block">
							<span><strong class="error error-name text-danger"></strong></span>
						</div>
						
					</div>
					<div class="form-group">
						<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" required" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="help-block">
						<span><strong class="error error-email text-danger"></strong></span>
					</div>
					
					<div class="form-group">
						<textarea class="form-control input-text text-area" name="message" rows="5" required id="message" ></textarea>
					</div>
					<div class="help-block">
						<span><strong class="error error-message text-danger"></strong></span>
					</div>
					{!! NoCaptcha::renderJs() !!}
                  	{!! NoCaptcha::display() !!}
					<div class="help-block">
						<span><strong class="error error-captcha text-danger"></strong></span>
					</div>
					<div class="help-block">
						<span>
							<strong class="text-success" id="success"></strong>
						</span>
					</div>
					<div class="text-center">
						<button class="input-btn submitBtn" data-url="{{ route('home.contact') }}">Send Message</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>