document.querySelectorAll('button.abrir-painel').forEach(button => {
    button.onclick = function() {
        const modalId = `modal-painel-${this.dataset.id}`; // Obtém o id do modal
        const modal = document.getElementById(modalId);
        modal.showModal();
    };
});

document.querySelectorAll('button.close-painel').forEach(button => {
    button.onclick = function() {
        const modal = this.closest('dialog'); // Encontra o modal mais próximo
        modal.close();
    };
});