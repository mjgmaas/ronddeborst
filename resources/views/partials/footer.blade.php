<!-- LIVE CSS EDITOR (IP-BEVEILIGD) -->
<div id="live-css-box">
  <div id="live-css-header">
    <div>Live CSS (Ace Editor)</div>
    <div>
      <span id="live-css-ip-label"></span>
      <button id="live-css-toggle" type="button">min</button>
    </div>
  </div>
  <div id="live-css-editor"></div>
</div>
<!-- ACE EDITOR SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.3/ace.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.3/ext-language_tools.min.js"></script>
<!-- MOBILE MENU TOGGLE -->
<script>
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
</script>
<!-- LIVE CSS LOGICA MET ACE -->
<script>
(function() {
  const allowedIp   = "86.84.104.116";
  const STORAGE_KEY = "ronddeborst_live_css_ace";
  const CSS_URL     = "stylesheet.css?v=2";
  const box       = document.getElementById("live-css-box");
  const toggleBtn = document.getElementById("live-css-toggle");
  const ipLabel   = document.getElementById("live-css-ip-label");
  let styleTag  = null;
  let aceEditor = null;
  function ensureStyleTag() {
    if (!styleTag) {
      styleTag = document.createElement("style");
      styleTag.id = "live-css-output";
      document.head.appendChild(styleTag);
    }
  }
  function applyCssFromEditor() {
    if (!aceEditor) return;
    const css = aceEditor.getValue() || "";
    ensureStyleTag();
    styleTag.innerHTML = css;
    try {
      localStorage.setItem(STORAGE_KEY, css);
    } catch (e) {
      console.warn("Kon CSS niet opslaan in localStorage:", e);
    }
  }
  function setEditorValueAndApply(css) {
    if (!aceEditor) return;
    aceEditor.setValue(css || "", -1);
    applyCssFromEditor();
  }
  function initAceEditor() {
    aceEditor = ace.edit("live-css-editor");
    aceEditor.session.setMode("ace/mode/css");
    aceEditor.setTheme("ace/theme/textmate");
    ace.require("ace/ext/language_tools");
    aceEditor.setOptions({
      enableBasicAutocompletion: true,
      enableLiveAutocompletion: true,
      enableSnippets: true,
      tabSize: 2,
      useSoftTabs: true,
      wrap: true,
      showPrintMargin: false
    });
    aceEditor.session.on("change", applyCssFromEditor);
    try {
      const saved = localStorage.getItem(STORAGE_KEY);
      if (saved && saved.trim() !== "") {
        setEditorValueAndApply(saved);
      } else {
        fetch(CSS_URL)
          .then(res => res.text())
          .then(text => setEditorValueAndApply(text))
          .catch(err => console.warn("Kon stylesheet niet inladen:", err));
      }
    } catch (e) {
      console.warn("Kon localStorage niet lezen:", e);
    }
  }
  toggleBtn.addEventListener("click", function () {
    if (box.style.height === "26px") {
      box.style.height = "500px";
      toggleBtn.textContent = "min";
    } else {
      box.style.height = "26px";
      toggleBtn.textContent = "max";
    }
  });
  fetch("https://api.ipify.org?format=json")
.then(res => res.json())
.then(data => {
  const currentIp = data.ip;
  ipLabel.textContent = currentIp;
  if (currentIp === allowedIp) {
    box.style.display = "flex";
    box.style.height = "26px";
    toggleBtn.textContent = "max";
    initAceEditor();
  }
})
.catch(err => {
  console.error("Kon IP niet ophalen:", err);
});
})();
</script>
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
