$(document).ready(function(){
    let banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
    let bannerAtual = 0;
    let timer = setInterval(trocarBanner, 4000);

    function trocarBanner() {
        bannerAtual = (bannerAtual + 1) % 2;
        $('.destaque img').attr('src', banners[bannerAtual]);
    }

    $(document).on('click', '.pause', function(e){
        e.preventDefault();

        if($(this).hasClass('pause')){
            clearInterval(timer);
            $(this).removeClass('pause').addClass('play');
        }else{
            //evita múltiplos intervalos
            clearInterval(timer);
            timer = setInterval(trocarBanner, 4000);
            $(this).removeClass('play').addClass('pause');
        }
    });
});

