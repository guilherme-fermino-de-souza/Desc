// Espera até que o DOM esteja carregado
document.addEventListener("DOMContentLoaded", function () {
    // Pegando o modal e o botão de fechar
    const modalErro = document.getElementById("modal-erro-aviso");
    const closeModalBtn = document.getElementById("close-erro-aviso");

    // Função para fechar o modal e restaurar o scroll
    closeModalBtn.addEventListener("click", function () {
        modalErro.style.display = "none"; // Fecha o modal
        document.body.style.overflow = "auto"; // Restaura o scroll da página
    });

    // Se o modal for exibido, desabilitar o scroll
    if (modalErro.style.display === "block") {
        document.body.style.overflow = "hidden"; // Bloqueia o scroll da página
    }
});