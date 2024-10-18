const button = document.querySelector('button name="teste"');
const modal = document.querySelector('dialog');
const buttonClose = document.querySelector('button name="aviso-close"');

button = function ()  {
    modal.showModal();
}

buttonClose = function () {
    modal.close();
}