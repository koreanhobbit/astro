<nav class="main-nav-outer" id="test">
	<!--main-nav-start-->
	<div class="container">
		<ul class="main-nav">
			<li><a href="#header">Home</a></li>
			<li><a href="#service">Services</a></li>
			<li><a href="#Portfolio">Portfolio</a></li>
			<li class="small-logo"><a href="#header"><img src="{{ !empty($setting->images()->wherePivot('is_maskot', 1)->first()) ? asset($setting->images()->wherePivot('is_maskot', 1)->first()->thumbnail->location) : asset('img/astrologo.png') }}" alt="" style="width:150px; height:50px;"></a></li>
			<li><a href="#client">Clients</a></li>
			<li><a href="#team">Team</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
	</div>
</nav>
<!--main-nav-end-->