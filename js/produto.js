$('[name=tamanho]').on('change input', function(){
    $('[name=valorTamanho]').text(this.value);
});