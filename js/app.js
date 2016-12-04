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