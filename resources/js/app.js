// MOBILE MENU TOGGLE
document.addEventListener('DOMContentLoaded', function () {
	const btn  = document.getElementById('mobile-menu-toggle');
	const menu = document.getElementById('mobile-menu');
	if (!btn || !menu) return;
	btn.addEventListener('click', function () {
		const isHidden = menu.classList.contains('hidden');
		if (isHidden) {
			menu.classList.remove('hidden');
			btn.setAttribute('aria-expanded', 'true');
		} else {
			menu.classList.add('hidden');
			btn.setAttribute('aria-expanded', 'false');
		}
	});
});
