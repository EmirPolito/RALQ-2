// Obtener los elementos del modal
const modal = document.getElementById("instrumentModal");
const modalTitle = document.getElementById("modalTitle");
const modalImage = document.getElementById("modalImage");
const modalDescription = document.getElementById("modalDescription");
const closeBtn = document.querySelector(".close");

// Asignar evento a los elementos con la clase menu-item
document.querySelectorAll('.menu-item').forEach(item => {
    // Si el elemento contiene un <model-viewer>, no activar el modal
    if (item.querySelector('model-viewer')) return;

    item.addEventListener('click', () => {
        const title = item.getAttribute('data-title');
        const imgSrc = item.getAttribute('data-image');
        const description = item.getAttribute('data-description');

        // Rellenar el contenido del modal
        modalTitle.textContent = title;
        modalImage.src = imgSrc;
        modalDescription.textContent = description;

        // Mostrar el modal
        modal.style.display = "flex";
    });
});

// Cerrar el modal cuando se hace clic en el botón de cerrar
closeBtn.addEventListener('click', () => {
    modal.style.display = "none";
});

// Cerrar el modal cuando se hace clic fuera del contenido del modal
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});
