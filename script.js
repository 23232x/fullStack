let nome = document.getElementById('nome').value;
let equi = document.getElementById('equipamento').value;
let desc = document.getElementById('descricao').value;


let btn = document.getElementById('enviar').value;

btn.addEventListener('click', verifica());



function verifica() {

    if (nome === '' || equi === '' || desc === '') {
        alert('Os campos devem ser preenchido');
    } else {
        document.getElementById('myForm').submit();
        return true
    }

}
