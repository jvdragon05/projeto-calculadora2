function alterarTexto() {
    var selectElement = document.getElementById("meuSelect");
    var selectedValue = selectElement.value;
    var textoElement = document.getElementById("textoAlteravel");

    switch(selectedValue) {
        case "toCM":
            textoElement.textContent = "Insira o Valor em METROS (convertendo para Centímetros):";
            break;
        case "toMT":
            textoElement.textContent = "Insira o Valor em CENTÍMETROS:";
            break;
        case "toKM":
            textoElement.textContent = "Insira o Valor em METROS (convertendo para Quilometros):";
            break;
        case "KM_toMT":
            textoElement.textContent = "Insira o Valor em QUILOMETROS:";
            break;
        
    }
}
