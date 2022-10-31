// le asigno a nav la clase activar

const button = document.querySelector(".btn_menu");
const nav = document.querySelector(".nav");

button.addEventListener("click", () => {
    nav.classList.toggle("activar");
});
