document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".fade-in");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          } else {
            entry.target.classList.remove("visible"); // Se reinicia la animación
          }
        });
      },
      {
        threshold: 0.2, // Se activa cuando el 20% del elemento es visible
      }
    );

    elements.forEach((el) => observer.observe(el));
  });