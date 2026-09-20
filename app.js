(function () {
  const yearEl = document.getElementById("year");
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  const toast = document.getElementById("toast");
  const showToast = () => {
    if (!toast) return;
    toast.classList.add("show");
    setTimeout(() => toast.classList.remove("show"), 5200);
  };

  const url = new URL(window.location.href);
  if (url.searchParams.get("ok") === "1") {
    showToast();
  }

  const forms = document.querySelectorAll('form[action="/"]');
  forms.forEach((f) => {
    f.addEventListener("submit", () => {
      const btn = f.querySelector('button[type="submit"]');
      if (btn) {
        btn.disabled = true;
        btn.textContent = "Envoi en cours...";
      }
    });
  });
})();
