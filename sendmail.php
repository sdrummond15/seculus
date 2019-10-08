<script>

    jQuery("div.enviado > div.fechar i").click(function () {

        jQuery('.enviado-overlay').css('transition', 'linear 100ms');

        jQuery('.enviado-overlay').hide();

        jQuery('.enviado').css('transition', 'linear 100ms');

        jQuery('.enviado').hide();

    });



    jQuery(document).keyup(function(e) {

        if (e.keyCode == 27) {

            jQuery('.enviado-overlay').css('transition', 'linear 100ms');

            jQuery('.enviado-overlay').hide();

            jQuery('.enviado').css('transition', 'linear 100ms');

            jQuery('.enviado').hide();

        }

    });



    jQuery(".enviado-overlay").click(function () {

        jQuery('.enviado-overlay').css('transition', 'linear 100ms');

        jQuery('.enviado-overlay').hide();

        jQuery('.enviado').css('transition', 'linear 100ms');

        jQuery('.enviado').hide();

    });

</script>

<?php

$to = 'contato@showdepremiosseculus.com.br'; // note the comma



// subject

$subject = 'Contato site';



// message

$message = '

  <p>Nome: ' . $_POST['nome'] . '</p>

  <p>E-mail: ' . $_POST['email'] . '</p>

  <p>Telefone: ' . $_POST['telefone'] . '</p>

  <p>Mensagem: ' . $_POST['msg'] . '</p>

';



// To send HTML mail, the Content-type header must be set

$headers = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



// Additional headers

$headers .= 'From: SHOW SECULUS <contato@showdepremiosseculus.com.br>' . "\r\n";



// Mail it

mail($to, $subject, $message, $headers);



echo '<div class="enviado-overlay"></div>'

    .'<div class="enviado animated fadeIn">'

    . '<div class="fechar"><i class="fa fa-times" aria-hidden="true"></i></div>'

    . '<h1>Obrigado por<br>entrar em contato!</h1>'
    . '</div>';