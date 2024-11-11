function adicionarParagrafo() {
    const novoParagrafo = document.createElement('input');
    novoParagrafo.type = 'text';
    novoParagrafo.name = 'paragrafosNoticias[]' //Array
    novoParagrafo.placeholder = 'Parágrafo';
    //Adicionar
    document.getElementById('paragrafosContainer').appendChild(novoParagrafo);
}