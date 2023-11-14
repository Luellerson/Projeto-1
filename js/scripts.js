$(function(){
    //Aqui vai todo o codigo javascript
    $('nav.mobile').click(function(){
        // o que vai acontecer qdo eu clicar np nav.mobile
        var listaMenu = $('nav.mobile ul');
        // Abrir menu através do fadeIn
        /*
        if(listaMenu.is(':hidden') == true)
            listaMenu.fadeIn();
        else
            listaMenu.fadeOut();
        */
        // Abrir menu sem efeito
        /*
        if(listaMenu.is(':hidden') == true)
            listaMenu.show();
            //listaMenu.css('display','block')
        else
            listaMenu.hide();
        //listaMenu.css('display','none')
        */
        // Abrir ou fechar com um comando
        //trocar o icone de barras para x
        if(listaMenu.is(':hidden') == true){
            //var icone = $('botao-menu-mobile i');    é equivalente ao comando abaixo
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        }else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
                
    })
})