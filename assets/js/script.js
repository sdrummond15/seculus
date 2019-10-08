jQuery(document).ready(function ($) {
    //EVENTO PARA SCROLL SLOW MENU
    $('.main-menu, #menuresp').on('click', 'a[href^="#"]', function (event) {
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

    $("#search_cnpj").keydown(function(){
        try {
            $("#search_cnpj").unmask();
        } catch (e) {}

        $("#search_cnpj").mask("99.999.999/9999-99");
        var elem = this;
        setTimeout(function(){
            // mudo a posição do seletor
            elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
        // reaplico o valor para mudar o foco
        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
    });
});

