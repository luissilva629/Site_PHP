$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');

        // *******Abrir e fechar menu através do fadeIn e fadeOut*******
        // if(listaMenu.is(':hidden') == true){
        //     listaMenu.fadeIn();
        // } else {
        //     listaMenu.fadeOut();
        // }

        // *********Abrir e fechar menu com show e hide********
        // if(listaMenu.is(':hidden') == true){
        //     listaMenu.show();
        // } else {
        //     listaMenu.hide();
        // }

        // *********Abrir e fechar menu com css**************
        // if(listaMenu.is(':hidden') == true){
        //     listaMenu.css('display', 'block');
        // } else {
        //     listaMenu.css('display', 'none');
        // }

        // **********Abrir menu com slideToggle**********
        if(listaMenu.is(':hidden') == true){
            // var icone = $('botao-menu-mobile i');
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        } else {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
    })

    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll}, 2000);
    }
})