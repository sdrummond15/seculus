<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Seculus</title>
    <meta name="description" content="Show de Prêmios Seculus.">
    <meta name="author" content="SDrummond">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Show de Prêmios Seculus"/>
    <meta property="og:description" content="Show de Prêmios Seculus.">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="450">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body class="numero-sorte">
<div id="topo"></div>
<header>

    <div id="menu">

        <div class="menu">
            <div class="main-menu">
                <ul>
                    <li><a href="index.php#periodo">Como Participar</a></li>
                    <li><a href="index.php#sorteio">Sorteios e Prêmios</a></li>
                    <li><a href="index.php#ganhadores">Resultados</a></li>
                    <li><a href="index.php#contato">Fale Conosco</a></li>
                    <li><a href="#"><span>Consulte Seu(s) Número(s) da Sorte</span></a></li>
                </ul>
            </div>
        </div>

        <div id="menuresp">
            <button title="button">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="responsive">
                <li><a href="index.php#periodo">Como Participar</a></li>
                <li><a href="index.php#sorteio">Sorteios e Prêmios</a></li>
                <li><a href="index.php#ganhadores">Resultados</a></li>
                <li><a href="index.php#contato">Fale Conosco</a></li>
                <li><a href="#">Consulte Seu(s) Número(s) da Sorte</a></li>
            </ul>
        </div>

    </div>

    <div id="slide-result">
        <img src="images/logo_premios_seculus.png" alt="promocao seculus"/>
    </div>

</header>

<section id="numero_sorte">

    <div>

        <article>

            <h3>Digite o CNPJ:</h3>
            <div>
                <form>
                    <fieldset>
                        <input type="text" name="search_cnpj" id="search_cnpj" placeholder="CNPJ" inputmode="numeric"/>
                        <input type="submit" id="btn-numero-sorte" class="btn-numero-sorte" value="Buscar"/>
                    </fieldset>
                </form>
            </div>

            <div id="result-numeros"></div>

        </article>

    </div>

</section>

<section id="chance">
    <article>
        <h3>QUANTO MAIS VOCÊ COMPRAR, MAIS CHANCE TEM DE GANHAR! </h3>
    </article>
</section>

<footer id="footer-result">
    <article>
        <p>
            Promoção interna válida para parceiros comerciais da Seculus da Amazônia,
            exceto para aqueles caracterizados como de comércio eletrônico e/ou Magazines
            Nacionais, não aberta para o público em geral. Os prêmios serão entregues
            livres de qualquer ônus, no endereço do cadastro do cliente junto à Seculus,
            em nome da Razão Social e CNPJ do contemplado, no prazo de até 30 (trinta)
            dias úteis, contados a partir da data de validação do pedido. No caso de não
            validação do cliente, o CNPJ será desclassificado, procedendo-se à identificação
            do novo ganhador, seguindo a Regra de Aproximação, na qual será considerada
            vencedora a série imediatamente superior. No caso dos prêmios Renegade Custom
            1.8 4x2 Flex 16V Mec. de valor R$ 72.733,00 (setenta e dois mil, setecentos e
            trinta e três reais), CG 160 FAN Flex de valor R$ 10.463,00 (dez mil, quatrocentos
            e sessenta e três reais, ambos Tabela FIPE Agosto/2019 e Vale-Viagem no valor
            de R$ 8.000,00 (oito mil reais), serão pagos em transferência bancária, mediante
            conta registrada em nome da empresa cadastrada na Seculus, e envio no ato da
            entrega de Recibo dando quitação do prêmio. Imagens meramente ilustrativas.
        </p>
    </article>
</footer>

<span class="topo">
    <a href="#topo">
        <i class="fas fa-angle-up"></i>
    </a>
</span>

</body>

<script src="assets/js/jquery_1.9.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.noty.packaged.min.js"></script>
<script src="assets/js/jquery.maskedinput-1.1.4.pack.js"></script>
<script src="assets/js/jquery.inputmask.bundle.js"></script>
<script src="assets/js/script.js"></script>

</html>
