'use strict';

window.APP = {};

APP.showOverlay = function showOverlay(id) {
	var overlay = document.getElementById('overlay');

	var overlayChild = overlay.querySelector('.overlay-child');

	overlay.style.display = 'block';

	overlay.addEventListener('click', function(event) {
		if (event.target === overlay) {
			overlay.style.display = 'none';
			event.target.removeEventListener('click', event, false);
		}
	});
};

APP.closeOverlay = function closeOverlay(id) {
	var overlay = document.getElementById('overlay');

	overlay.style.display = 'none';
}

var source = document.getElementById('child_info').innerHTML;

var template = Handlebars.compile(source);

var context = {
	child_name: 'Luke',
	allergy: [{
		allergen_id: 'Allergy 1',
		is_allergic: true,
		name: 'Pollen'
	}, {
		allergen_id: 'Allergy 2',
		is_allergic: false,
		name: 'Dander'
	}],
	morning_routine: 'Luke likes to wake up at 8am.',
	evening_routine: 'Luke goes to bed before 11pm every night.',
	overall_goal: 'Do a good job today'
};

var html = template(context);

var overlay = document.getElementById('overlay').querySelector('.overlay-child');

overlay.innerHTML = html;
