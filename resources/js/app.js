// Reviews slider (voor testimonials)
document.addEventListener('DOMContentLoaded', function () {
	const slides = document.querySelectorAll('.reviews-slide');
	const dots   = document.querySelectorAll('.reviews-dot');
	let current  = 0;
	function showSlide(index) {
		slides.forEach((slide, i) => {
			slide.classList.toggle('hidden', i !== index);
		});
		dots.forEach((dot, i) => {
			if (i === index) {
				dot.classList.add('bg-[#95B39A]');
				dot.classList.remove('bg-white');
			} else {
				dot.classList.remove('bg-[#95B39A]');
				dot.classList.add('bg-white');
			}
		});
		current = index;
	}
	dots.forEach(dot => {
		dot.addEventListener('click', function () {
			const index = parseInt(this.getAttribute('data-target'), 10);
			showSlide(index);
		});
	});
	if (slides.length && dots.length) {
		showSlide(0);
	}
});

// Smooth scroll voor anchor links
document.addEventListener("DOMContentLoaded", () => {
	document.querySelectorAll('a[href^="#"]').forEach(link => {
		link.addEventListener("click", function(e) {
			const target = document.querySelector(this.getAttribute("href"));
			if (!target) return;
			e.preventDefault();
			target.scrollIntoView({
				behavior: "smooth",
				block: "start"
			});
		});
	});
});
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

// TOGGLE PANEL BUTTONS
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('button[data-toggle-panel]').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var panelId = btn.getAttribute('data-toggle-panel');
            var panel = document.getElementById(panelId);
            if (!panel) return;
            var openLabel = btn.getAttribute('data-toggle-label-open') || 'Dichtklappen';
            var closedLabel = btn.getAttribute('data-toggle-label-closed') || 'Uitklappen';
            var isOpen = !panel.classList.contains('hidden');
            panel.classList.toggle('hidden');
            btn.textContent = isOpen ? closedLabel : openLabel;
        });
    });
});
