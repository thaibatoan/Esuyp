var master = {};

master.toTopID = '#scrolltop';
master.headerContentID = '#header-content';
master.navbarID = '#navbar';
master.titleID = '#title';
master.toTopTrigger = 100;// px
master.toTopSpeed = 700;
master.snapSlider = $('#slider-snap');

	
          	
master.init = function () {
	master.initUI();
	master.initEvent();
};

master.initUI = function () {

};

master.initEvent = function () {
                
	master.ToTopEvent();
	
	// Add slideDown animation to Bootstrap dropdown when collapsing.
	$('.dropdown').on('show.bs.dropdown', function() {
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown('fast');
		$(this).find('a').first().addClass('active');
	});
	

	// Add slideUp animation to Bootstrap dropdown when collapsing.
	$('.dropdown').on('hide.bs.dropdown', function() {
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp('fast');
		$(this).find('a').first().removeClass('active');
	});
	
	
	$('.dropdown-submenu>a').off('click').on('click', function(e){
		$('.dropdown-submenu>a').not($(this)).removeClass('active');
		if($(window).width() >= 992){
			$('.dropdown-submenu>ul').hide();
			if( $(this).hasClass('active')){
				$(this).removeClass('active');
			}
			else {
				$(this).addClass('active');
				$(this).next('ul').toggle();
			}
		}
		else{
			$('.dropdown-submenu>ul').slideUp('fast');
			if( $(this).hasClass('active')){
				$(this).removeClass('active');
			}
			else {
				$(this).addClass('active');
				$(this).next('ul').slideDown('fast');
			}
		}
        e.stopPropagation();
        e.preventDefault();
    });
}

master.ToTopEvent = function () {
	if ($(master.toTopID).length) {
		master.backToTop();
		$(window).on('scroll', function () {
			master.backToTop();
		});
		$(master.toTopID).on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, master.toTopSpeed);
		});
	}
} 

master.backToTop = function () {
	var scrollTop = $(window).scrollTop();
	if (scrollTop > master.toTopTrigger) {
		$(master.toTopID).addClass('show');
		$(master.titleID).addClass('hide');
		$(master.titleID).removeClass('inline-block');
		$(master.headerContentID).removeClass('big-menu');
		$(master.navbarID).removeClass('mx-auto');
	} else {
		$(master.toTopID).removeClass('show');
		$(master.titleID).removeClass('hide');
		$(master.titleID).addClass('inline-block');
		$(master.headerContentID).addClass('big-menu');
		$(master.navbarID).addClass('mx-auto');
	}
};