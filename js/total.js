var $input_quantidade = document.querySelector("#qt");
var $output_total = document.querySelector("#total");

$input_quantidade.oninput = calculaEMostraTotal;

function calculaEMostraTotal() {
    //debugger;
    var quantidade = parseInt($input_quantidade.value);

    var valorUnitarioTexto = document.querySelector("#total");
    var valorUnitarioNumero = realParaNumber(valorUnitarioTexto.value);

    var total = numberParaReal(quantidade * valorUnitarioNumero);
    $output_total.value = total;
}

