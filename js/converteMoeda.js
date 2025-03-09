function numberParaReal(numero) {
    var formatado =  "R$ " + numero.toFixed(2).replace(".",",");
    return formatado;
}

console.log(numberParaReal(1234.56));

function realParaNumber(texto) {
    var soNumero = texto.replace("R$ ", "");
    soNumero = soNumero.replace(",", ".");
    var valor = parseFloat(soNumero);
    return valor;
}

console.log(realParaNumber("R$ 120,35"));



/*//Funções 
function nomeDaFuncao(parametro) {
    alert("Atenção");
}

//nomeDaFuncao();*/

/*
//funções com parâmetros 
function exibeMensagem(mensagem){
    debugger;
    alert(mensagem);
}

//exibeMensagem("JavaScript");

function somaDoisNumeros(numero1, numero2){
    alert(numero1 + numero2);
}

//somaDoisNumeros(10, 20);
//somaDoisNumeros(100, 20);
//somaDoisNumeros(45, 35);

//função com retorno 
function somaDoisNumeros(numero1, numero2){
    debugger;
    return numero1 + numero2;
}

var numero = 80;
/*var resultado = somaDoisNumeros(10, 20);
alert(numero - resultado);*/

/*//Function Expression
var somaNumeros = function(numero1, numero2){
    debugger;
    return numero1 + numero2;
};

somaNumeros(10, 20);*/


/*document.querySelector('form input').oninvalid = function(evt) {
    //cancela comportamento padrão do browser
    evt.preventDefault();

    //checa validade e mostra alert
    if (!this.validity.valid) {
        alert("Nome Obrigatório!")
    }
};

document.querySelector('input[type=email'.oninvalid = function() {
    //remove mensagens de erro antigas
    this.setCustomValidity("");

    //reexecuta validação
    if (!this.validity.valid) {
        // se inválido, coloca mensagem de erro
        this.setCustomValidity("Email inválido")
    }
});*/

