const Aviso = document.getElementById("modal-aviso");
const AvisoClose = document.querySelector('button[name="close-aviso"]');

AvisoClose.onclick = function () {
    Aviso.style.display = "none";
}