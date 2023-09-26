// Gatilho de evento para, quando o "metodo" sofrer alguma alteração, a função exibirForm é acionada
document.getElementById("metodo").addEventListener("change", exibirForm);

// Função
function exibirForm() {

  // Atribuindo a variável para a seleção 
  var elemento = document.getElementById("div1");

  // Verificando a opção escolhida no select
  if(document.getElementById("metodo").value == "incluir") {

    // Alterando a visibilidade do elemento para "visível"
    elemento.style.display = "block";
  } else {

    // Alterando a visibilidade do elemento para "invisível"
    elemento.style.display = "none";
  }


}
