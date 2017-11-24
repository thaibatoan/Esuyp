var browse = {};

browse.init = function () {
	browse.initUI();
	browse.initEvent();
};

browse.initUI = function () {
	var snapSlider = document.getElementById('slider-snap');

	noUiSlider.create(snapSlider, {
		start: [ 0, 5 ],
		snap: false,
		step:0.1,
		connect: true,
		range: {
			'min': 0,
			'max': 5
		},
		format: wNumb({
			decimals: 1,
			postfix: ' <i class="fa  fa-star-o"></i>',
		})
	});
	var snapValues = [
		document.getElementById('slider-snap-value-lower'),
		document.getElementById('slider-snap-value-upper')
	];
	snapSlider.noUiSlider.on('update', function( values, handle ) {
		snapValues[handle].innerHTML = values[handle];
	});
	
};

browse.initEvent = function () {
	$('.category-wrap').on('click', function () {
		$(this).closest('li').find('ul').slideToggle('fast');
	});
	
	$('#btn-sidebar-toggle').on('click', function () {
		$('#sidebar').toggle('fast');
	});
}