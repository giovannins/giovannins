const anoTrabalhoElement = document.getElementById("anoTrabalho");
const date = new Date();
const anoAtual = date.getFullYear();
const anoTrabalho = (anoAtual - 2017);

anoTrabalhoElement.innerText = anoTrabalho;