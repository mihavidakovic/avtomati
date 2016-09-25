$( document ).ready(function() {
	// kategorije

	$('.nav-tabs li a').on('click', function(e) {
		e.preventDefault;
		var kategorija2 = $(this).data('kategorija2');
		$('.load').addClass('open');
		$('.izdelki').hide();

		setTimeout(function(){
			$('.load').removeClass('open');
		}, 450);

		setTimeout(function(){
			$('.izdelki').load('izdelki/' + kategorija2).delay(200).fadeIn();
		}, 500);
	});

	// podkategorije

	$('.nav-tabs li ul li').on('click', function() {
		var kategorija = $(this).data('kategorija');
		var podkategorija = $(this).data('podkategorija');
		$('.nav-tabs li ul li.current').removeClass('current');
		$(this).addClass('current');
		$('.load').addClass('open');
		$('.izdelki').hide();

		setTimeout(function(){
			$('.load').removeClass('open');
		}, 450);

		setTimeout(function(){
			$('.izdelki').load('izdelki/' + kategorija + '/' + podkategorija).delay(200).fadeIn();
		}, 500);

		$('.nav-tabs li.active').removeClass('active');

		if ($('.nav-tabs li ul li').hasClass('current')) {
			$(this).parent().parent().addClass('active');
		}
	});

	$('.popup .close-popup').on('click', function() {
		$('.popup').removeClass('open');
	});





});