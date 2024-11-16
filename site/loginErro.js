const Aviso = document.getElementById("modal-erro-aviso");
const AvisoClose = document.querySelector('button[name="close-erro-aviso"]');

AvisoClose.onclick = function () {
    Aviso.style.display = "none";
}