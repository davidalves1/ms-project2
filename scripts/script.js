// JavaScript Document

function limpa(campo) {
if (campo.value == "Pesquise no site") {
  campo.value = "";
}
}
function preenche(campo) {
if (campo.value == "") {
  campo.value = "Pesquise no site";
}
}