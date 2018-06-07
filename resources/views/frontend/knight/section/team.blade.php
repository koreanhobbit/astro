<section class="main-section team" id="team">
	<!--main-section team-start-->
	<div class="container">
		<h2>team</h2>
		<h6>Meet our lovely team members.</h6>
		<div class="team-leader-block clearfix">
			<div class="team-leader-box">
				@foreach($members as $key => $member)
					<div class="team-leader wow fadeInDown delay-0{{ $key + 1 }}s">
						<div class="team-leader-shadow"></div>
						<img style="width: 100%; height: 100%;" src="{{ asset($member->images->first()->imageMid->location) }}" alt="{{ $member->images->first()->name }}">
						<ul>
							@foreach($member->profilesocialmedias as $item)
								<li><a href="{{ $item->pivot->link }}" class="fa-{{ $item->icon }}"></a></li>
							@endforeach
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-0{{ $key + 1 }}s">{{ $member->name }}</h3>
					<span class="wow fadeInDown delay-0{{ $key + 1 }}s">{{ $member->job_title }}</span>
					<p class="wow fadeInDown delay-0{{ $key + 1 }}s">{{ $member->teamprofile->description }}</p>
				@endforeach
			</div>
		</div>
	</div>
</section>
<!--main-section team-end-->