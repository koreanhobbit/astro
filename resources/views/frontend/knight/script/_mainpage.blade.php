<script type="text/javascript">
	$(document).ready(function(e) {
		$('#test').scrollToFixed();
		$('.res-nav_click').click(function() {
			$('.main-nav').slideToggle();
			return false

		});

	});
</script>

<script>
	wow = new WOW({
		animateClass: 'animated',
		offset: 100
	});
	wow.init();
</script>


<script type="text/javascript">
	$(window).on('load',function() {

		$('.main-nav li a, .servicelink').bind('click', function(event) {
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500, 'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			if ($(window).width() < 768) {
				$('.main-nav').hide();
			}
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">
	$(window).on('load',function() {


		var $container = $('.portfolioContainer'),
			$body = $('body'),
			colW = 375,
			columns = null;


		$container.isotope({
			// disable window resizing
			resizable: true,
			masonry: {
				columnWidth: colW
			}
		});

		$(window).smartresize(function() {
			// check if columns has changed
			var currentColumns = Math.floor(($body.width() - 30) / colW);
			if (currentColumns !== columns) {
				// set new column count
				columns = currentColumns;
				// apply width to container manually, then trigger relayout
				$container.width(columns * colW)
					.isotope('reLayout');
			}

		}).smartresize(); // trigger resize to set container width
		$('.portfolioFilter a').click(function() {
			$('.portfolioFilter .current').removeClass('current');
			$(this).addClass('current');

			var selector = $(this).attr('data-filter');
			$container.isotope({

				filter: selector,
			});
			return false;
		});

	});
</script>

<script>
	$(document).ready(function() {
		// $('.error').text('');
		$('.submitBtn').click(function() {
			$('.error').text('');
			var url = $(this).data('url');
			var name = $('#name').val();
			var email = $('#email').val();
			var message = $('#message').val();
			var captcha = $('#g-recaptcha-response').val();
			$.ajax({
				headers: {
        			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			},
				type:'post',
				url: url,
				data: {
					'_token': $('input[name=_token]').val(),
					'name': name,
					'email': email,
					'message': message,
					'captcha' : captcha,

				},
				success:function(data) {
					$('#success').html('Your message was sent! Thanks for contacting us!');
					$('.input-text').val('');
					grecaptcha.reset();
				},
				error:function(data) {
    				var errors = data.responseJSON;
    				$('.error-name').text(errors.errors.name);
    				$('.error-email').text(errors.errors.email);
    				$('.error-message').text(errors.errors.message);
    				$('.error-captcha').text(errors.errors.captcha);
    				grecaptcha.reset();
				}
			});

		});
	});
</script>