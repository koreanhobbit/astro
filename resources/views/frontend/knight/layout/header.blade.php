<header class="header" id="header">
	<!--header-start-->
	<div class="container">
		<figure class="logo animated fadeInDown delay-07s">
			<a href="#"><img src="{{ !empty($setting->images()->wherePivot('is_maskot', 0)->first()) ? asset($setting->images()->wherePivot('is_maskot', 0)->first()->thumbnail->location) : asset('img/astrologowhite.png') }}" alt=""></a>
		</figure>
		<h1 class="animated fadeInDown delay-07s">Welcome To {{ $setting->site_title }}</h1>
		<ul class="we-create animated fadeInUp delay-1s">
			<li>{{ $setting->tagline }}</li>
		</ul>
		<a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
	</div>
</header>
<!--header-end-->