'use strict';

window.APP = {};

APP.dataModels = {
	'default': {
		message: 'Coming soon'
	},
	'child_info': {
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
	},
	'permissions': {
		parent: [{
			parent_name: 'Person 1'
		}, {
			parent_name: 'Person 2'
		}],
		foster_family: [{
			id: 123,
			approved: true,
			surname_plural: 'Whittacres'
		}, {
			id: 456,
			approved: true,
			surname_plural: 'Joneses'
		}],
		supervised_visits_approved: true,
		unsupervised_visits_approved: true
	},
	'event_planning': {

	},
	'relationships_list': {

	},
	'upcoming_visitations': {

	}
};

APP.showOverlay = function showOverlay(templateId) {
	if (!templateId) {		
		alert('Coming soon.');

		return;
	}

	var context = APP.dataModels[templateId];

	if (!context) return;

	APP.loadTemplate(templateId, context);

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

APP.loadTemplate = function loadTemplate(templateId, context) {
	var source = document.getElementById(templateId).innerHTML;

	var template = Handlebars.compile(source);

	var html = template(context);

	var overlay = document.getElementById('overlay').querySelector('.overlay-child');

	overlay.innerHTML = html;
}
