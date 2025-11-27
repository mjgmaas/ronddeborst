<!-- ...existing code... -->
<script>
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
    showSlide(0);
  });
</script>
<script>
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
</script>
