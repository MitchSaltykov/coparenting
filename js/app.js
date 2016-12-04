'use strict';

window.APP = {};

APP.dataModels = {
	'default': {
		message: 'Coming soon'
	},
	'child_info': {
		child: [{
			child_name: 'Jon',
			child_age: 4,
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
			afternoon_routine: "Gets very cranky if he's not ready for naptime by 12:30.",
			bedtime_routine: 'Luke goes to bed before 11pm every night.',
			overall_goal: 'Do a good job today'
		}, {
			child_name: 'Gladys',
			child_age: 6,
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
			afternoon_routine: "Gets very cranky if he's not ready for naptime by 12:30.",
			bedtime_routine: 'Luke goes to bed before 11pm every night.',
			overall_goal: 'Do a good job today'
		}]
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
		child: [{
			child_name: 'Jimmy',
			foster_family_surname: 'Smiths'
		}, {
			child_name: 'Susie',
			foster_family_surname: 'Jones'
		}]
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

APP.toggleDisplay = function toggleDisplay(event, toggleableGroupSelector) {
	event.preventDefault();

	var parent = event.target.parentElement;

	// turn off others
	var toggleableGroupElement = document.querySelector(toggleableGroupSelector);

	var toggleableKids = toggleableGroupElement.querySelectorAll('.toggleable-content')
	toggleableKids.forEach(function(element) {
		element.style.display = 'none';
	});

	// turn on this one
	// TODO: more perf
	var toggleable = parent.querySelector('.toggleable-content');

	var toggleableStyle = toggleable.style.display;

	var newDisplay = toggleableStyle === 'none' ? 'block' : 'none';

	toggleable.style.display = newDisplay;
};

APP.submitVisit = function submitVisit() {
	window.location.href = '?user=bp&event_submitted=true&allowed=true';
};

APP.profileBuilt = function profileBuilt() {
	window.location.href = '?user=sw&page=relationships_list&profile_built=true&profile_id=1&case_id=1'
};

APP.goToRelationshipsList = function goToRelationshipsList() {
	window.location.href = '?user=sw&page=relationships_list&case_id=1';
}
