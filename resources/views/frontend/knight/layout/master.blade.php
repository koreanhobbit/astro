<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The best website developer and business consultant, contact us now!, website development, website design, app development, app design, start-up, e-commerce, wordpress, company profile, seo, Website, Graphic Design, Web Design, Web Programming, SEO Materi yang diajarkan adalah HTML, CSS, Javascript, Photoshop, PHP, Codeigniter, Ajax, jQuery, Search Engine Optimization, Adobe inDesign,Toko Online, Internet Marketing, Social Media, Facebook, Twitter, dan Online Branding,astro, web, astroweb, studio, astrowebstudio, astrowebstudio.com">
    <meta name="keywords" content="The best website developer and business consultant, contact us now!, website development, website design, app development, app design, start-up, e-commerce, wordpress, company profile, seo, Website, Graphic Design, Web Design, Web Programming, SEO Materi yang diajarkan adalah HTML, CSS, Javascript, Photoshop, PHP, Codeigniter, Ajax, jQuery, Search Engine Optimization, Adobe inDesign,Toko Online, Internet Marketing, Social Media, Facebook, Twitter, dan Online Branding, Astro, Web, Studio, Astroweb, Astrowebstudio, Astrowebstudio.com">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ !empty($setting->images()->wherePivot('is_maskot', 0)->first()) ? asset($setting->images()->wherePivot('is_maskot', 0)->first()->thumbnail->location) : asset('img/astrologowhite.png') }}">


    <title>{{ $setting->site_title }}, The Best Website Developer and Business Consultant. Contact us now! | Website Design | Website Development | App Design | App Development | Start-up | Business Consultant | SEO | Wordpress | e-commerce |</title>
	
	<link href="{{ asset('frontend/knight/css/app.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('frontend/knight/css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('frontend/knight/css/responsive.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('frontend/knight/css/animate.css') }}" rel="stylesheet" type="text/css">
	@yield('style')
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
	@include('frontend.knight.layout.header')

	@include('frontend.knight.layout.nav')

	@yield('section')	

	@include('frontend.knight.layout.footer')

	<script type="text/javascript" src="{{ asset('frontend/knight/js/app.js') }}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	@yield('script')
	@include('frontend.knight.layout.messenger.tawkto')
</body>

</html>
