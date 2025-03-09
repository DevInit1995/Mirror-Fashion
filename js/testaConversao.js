var formatado = numberParaReal(9.9);
if(formatado == "R$ 9,90"){
    console.log("Conversão de moeda está funcionando: " + formatado);
}
else {
    console.log("Conversão de moeda está bugada");
}

var numero = realParaNumber("R$ 120,35");
if(numero == "R$ 120,35"){
    console.log("Conversão de moeda está funcionando: " + numero);
}
else {
    console.log("Conversão de moeda está bugada");
}
