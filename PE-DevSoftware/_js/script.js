var grayscale = false;          //variável global e função para mudar a foto do CV para versão em escala de cinza quando passar com o mouse por cima e ao clicar.
function mudaFoto(tipo) {
    if (tipo == 1) {
        arquivo = "_imagens/foto_cv_gs.jpg";
    }
    if (tipo == 2) {
        arquivo = "_imagens/foto_cv.jpg";
    }
    if (tipo == 3) {
        arquivo = "_imagens/foto_cv_gs.jpg";
    }
    if (tipo == 4) {
        arquivo = "_imagens/diploma.png";
    }
    if (!grayscale) {
        document.getElementById("img-cv").src = arquivo;
        if (tipo == 3) {
            grayscale = true;
        }
    }
}

function status(nome) {         //função para chamar alerta sobre se está trabalhando ou não.
    alert("Atualmente está em busca de oportunidades de trabalho.") == nome;
} 