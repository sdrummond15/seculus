jQuery(document).ready(function ($) {

    jQuery.browser = {};
    (function () {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;
        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
    })();

    $("#phone").inputmask({
        mask: ["(99) 9999-9999", "(99) 99999-9999", ],
        keepStatic: true
    });

    //EVENTO PARA SCROLL SLOW MENU
    $('.main-menu, #menuresp, .topo').on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);

    });

    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $('.topo').fadeIn('slow');
        }
        else {
            $('.topo').fadeOut('slow');
        }
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

    $('#search_cnpj').inputmask("99.999.999/9999-99");

    //Valida CNPJ

    $('#search_cnpj').focusout(function () {
        if ($("#search_cnpj").val().length > 0) {
            if ($("#search_cnpj").val().length < 18) {
                noty({
                    text: 'CNPJ Inválido!',
                    layout: 'top',
                    type: 'warning',
                    modal: true,
                    timeout: 4000,
                    onClick: function ($noty) {
                        $noty.close();
                    },
                    callback: {
                        onClose: function () {
                            $("#search_cnpj").focus();
                            $("#search_cnpj").val('');
                        }
                    }
                });
                return false;
            }

            var validarCnpj = VerificaCNPJ(somenteNumeros($("#search_cnpj").val()));
            if (validarCnpj === false) {
                noty({
                    text: 'CNPJ Inválido!',
                    layout: 'top',
                    type: 'warning',
                    modal: true,
                    timeout: 4000,
                    onClick: function ($noty) {
                        $noty.close();
                    },
                    callback: {
                        onClose: function () {
                            $("#search_cnpj").focus();
                            $("#search_cnpj").val('');
                        },
                    }
                });
                return false;
            }
        }
    });

    $('#btn-numero-sorte').click(function (e) {

        var formData = $(this).parents('form').serialize();

        if($('#search_cnpj').val() == '') {
            $('#result-numeros').empty();
            noty({
                text: 'Informe um CNPJ!',
                layout: 'top',
                type: 'warning',
                modal: true,
                timeout: 4000,
                onClick: function ($noty) {
                    $noty.close();
                },
                callback: {
                    onClose: function () {
                        $("#search_cnpj").focus();
                        $("#search_cnpj").val('');
                    },
                }
            });
            return false;
        }

        e.preventDefault();

        $.ajax({
            type: "POST",
            url: 'numeros_sorte.php',
            async: true,
            data: formData,
            success: function (data) {
                $('#result-numeros').empty();
                $('#result-numeros').prepend(data);
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


});

function somenteNumeros(str) {
    var numsStr = str.replace(/[^0-9]/g,'');
    return String(numsStr);
}

function VerificaCNPJ(cnpj) {
    cnpj = cnpj.toString().replace(/[^\d]+/g, '');
    if (cnpj == '')
        return false;
    if (cnpj.length != 14)
        return false;
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999")
        return false;

    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0, tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;

    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }

    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

    if (resultado != digitos.charAt(0))
        return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;

    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }

    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

    if (resultado != digitos.charAt(1))
        return false;

    return true;

}