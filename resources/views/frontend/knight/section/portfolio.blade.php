<section class="main-section paddind" id="Portfolio">
	<!--main-section-start-->
	<div class="container">
		<h2>Portfolio</h2>
		<h6>Fresh portfolio of designs that will keep you wanting more. Here are some our sample projects.</h6>
		<div class="portfolioFilter">
			<ul class="Portfolio-nav wow fadeIn delay-01s">
				<li><a href="#" data-filter="*" class="current">All</a></li>
				@foreach($categories as $category)
					<li><a href="#" data-filter=".{{ $category->category->slug }}">{{ $category->category->category }}</a></li>
				@endforeach
			</ul>
		</div>

	</div>
	<div class="portfolioContainer wow fadeInUp delay-02s">
		@foreach($portfolios as $portfolio)
			<div class=" Portfolio-box {{ $portfolio->category->slug }}">
				<img style="height: 250px;" src="{{ asset($portfolio->images()->wherePivot('is_maskot', 1)->first()->imageMid->location) }}" alt="{{ $portfolio->images()->wherePivot('is_maskot', 1)->first()->name }}">
				<h3>{{ $portfolio->title }}</h3>
				<p>{{ strip_tags($portfolio->description) }}</p>
				@if(!empty($portfolio->link))
					<a href="{{ $portfolio->link }}" target="_blank"><span><i class="fa fa-link">&nbsp;{{ $portfolio->link }}</i></span></a>
				@endif
			</div>
		@endforeach
	</div>
</section>
<!--main-section-end-->