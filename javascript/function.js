/* INDEX - HOME */
"use strict";

function cookies() {
    let cookies = localStorage.getItem("cookiesExibidos");

    let modalCookies = document.getElementById("modalCookies");

    if (cookies != "true") {
        modalCookies.style.display = "block";
    }
}

function fecharCookies() {
    let modalCookies = document.querySelector('#modalCookies');

    modalCookies.style.display = "none";

    localStorage.setItem("cookiesExibidos", "true");
}

function scroll() {
    principal.scrollIntoView();
}

/* BRINCOS */
/* modal brincos */
function abrir1() {
    let modal = document.querySelector('#janela-modal1');

    modal.classList.add('abrir');

    window.onclick = function (event) {
        if (event.target.classList.contains('close') || event.target == modal) {
            modal.classList.remove('abrir');
        }
    }
}

function abrirModal() {
    let modal = document.querySelector('#janela-modal');
    const imgClick = event.target;
    let index = imgClick.dataset.index;
    let imagemModal = document.querySelector('#imagem-modal');

    modal.classList.add('abrir');
    imagemModal.src = index;

    window.onclick = function (event) {
        if (event.target.classList.contains('close') || event.target == modal) {
            modal.classList.remove('abrir');
        }
    }
}

function closeButton() {
    let janelasModal = document.querySelectorAll('.janela-modal');

    janelasModal.forEach(function (janelaModal) {
        janelaModal.classList.remove('abrir');
    });
}