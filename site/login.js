const button = document.querySelector('button[name="modal-login"]')
const modal = document.querySelector("dialog")
const buttonClose = document.querySelector('button[name="close-modal"]')

button.onclick = function () {
    modal.showModal()
}

buttonClose.onclick = function () {
    modal.close()
}