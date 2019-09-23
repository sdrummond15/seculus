jQuery(document).ready(function ($) {
    $('.carousel').carousel({
        interval: 6000,
        ride: true
    });

    //PADDING PARA O BANNER
    $(window).on('resize', function () {

    }).trigger('resize');


    //IGUALANDO O TAMANHO DAS DIVS DE O QUE FAZEMOS
    $(window).on('resize', function () {
        $('#levantamento').css('height', $('#inventario').innerHeight());
    }).trigger('resize');

    //EVENTO PARA SERVIÇOS DETALHAMENTO SLIDE UP E DOWN
    $('#levantamento button').on('click', function () {
        $('#desc-service ul.inventario').slideUp("slow", function () {
            if ($("#inventario button i").hasClass("fa-chevron-up") == true) {
                $("#inventario button i").removeClass('fa-chevron-up');
            }
            $('#desc-service ul.levantamento').slideToggle("slow");
            $("#levantamento button i").toggleClass('fa-chevron-up', 'fa-chevron-down');
        });
    });
    $('#inventario button').on('click', function () {
        $('#desc-service ul.levantamento').slideUp("slow", function () {
            if ($("#levantamento button i").hasClass("fa-chevron-up") == true) {
                $("#levantamento button i").removeClass('fa-chevron-up');
            }
            $('#desc-service ul.inventario').slideToggle("slow");
            $("#inventario button i").toggleClass('fa-chevron-up', 'fa-chevron-down');
        });
    });

    //EVENTO PARA SERVIÇOS DETALHAMENTO SLIDE UP E DOWN RESPONSIVO
    $('#levantamento-resp button').on('click', function () {
            $('#desc-levantamento-resp').slideToggle("slow");
            $("#levantamento-resp button i").toggleClass('fa-chevron-up', 'fa-chevron-down');
    });
    $('#inventario-resp button').on('click', function () {
        $('#desc-inventario-resp').slideToggle("slow");
        $("#inventario-resp button i").toggleClass('fa-chevron-up', 'fa-chevron-down');
    });

    //EVENTO PARA SCROLL SLOW MENU E LOGO
    $('.logo, .main-menu, #menuresp').on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);

    });

    //ENVIO DE CONTATO
    $('#btn').click(function (e) {
        var nome = $('#nome').val();
        var email = $('#email').val();
        var telefone = $('#phone').val();
        var msg = $('#msg').val();
        if (nome.length <= 3) {
            alert('Informe seu nome');
            return false;
        }
        if (email.length <= 5) {
            alert('Informe seu email');
            return false;
        }
        if (IsEmail(email) == false) {
            alert('Informe um e-mail válido');
            return false;
        }
        if (msg.length <= 5) {
            alert('Escreva uma mensagem');
            return false;
        }
        var urlData = "&nome=" + nome + "&email=" + email + "&telefone=" + telefone + "&msg=" + msg;
        $.ajax({
            type: "POST",
            url: 'sendmail.php',
            async: true,
            data: urlData,
            success: function (data) {
                $('#retornoHTML').prepend(data);
            },
            beforeSend: function () {
                $('.loading').fadeIn('fast');
            }, complete: function () {
                $('.loading').fadeOut('fast');
                $("#nome").val("");
                $("#email").val("");
                $("#phone").val("");
                $("#msg").val("");
            }
        });

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }
    });

    $(window).on('resize', function () {
        if (!$("#menuresp button").is(':visible')) {
            $('#menuresp ul').hide();
        }
    }).trigger('resize');


    $("#menuresp button").click(function () {
        $('#menuresp ul').slideToggle();
    });

    $("#menuresp ul li a").click(function () {
        $('#menuresp ul').slideToggle();
    });

    $(".logo a").click(function () {
        $('#menuresp ul').slideUp();
    });
});

