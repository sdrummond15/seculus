<?php
$tipo = $_GET['sorteio'];
if( (!isset($tipo) || trim($tipo) != 'regional') && (trim($tipo) != 'nacional')){
    $tipo = 'regional';
}
echo $tipo;


$servername = "localhost";
$username = "root";
$password = "admin";
$result = '';

// Create connection
$conn = new mysqli($servername, $username, $password,'db_showseculus');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {

    $titulo = 'Informe a data do sorteio:';

    $selectRegional = '';
    if($tipo == 'regional') {
        $sqlRegional = "select * from sweepstakes where type = '$tipo' group by type_zone";
        $resRegional = $conn->query($sqlRegional);
        $countRegional = 0;
        $optionRegional = '';

        while ($rowRegional = $resRegional->fetch_assoc()) {
            $optionRegional.=  '<option value="' . $rowRegional["type_zone"] . '">' . $rowRegional["type_zone"] . '</option>';
            $countRegional ++;
        }
        if($countRegional > 0){
            $selectRegional = '<select name="type_zone" id="type_zone">' . $optionRegional . '</select>';
        }

        $titulo = 'Informe a regional e a data do sorteio:';

    }

    $sqlDate = "select * from sweepstakes where type = '$tipo' group by date_drawn";
    $resDate = $conn->query($sqlDate);
    $countDate = 0;
    $optionDate = '';
    $selectDate = '';
    while ($rowDate = $resDate->fetch_assoc()) {
        $optionDate.=  '<option value="' . $rowDate["date_drawn"] . '">' .
                            implode('/',array_reverse(explode('-',$rowDate["date_drawn"]))) .
                        '</option>';
        $countDate ++;
    }
    if($countDate > 0){
        $selectDate = '<select name="date_drawn" id="date_drawn" >' . $optionDate . '</select>';
    }

}
?>

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

<body class="sorteios">
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
                    <li><a href="resultados.php"><span>Consulte Seu(s) Número(s) da Sorte</span></a></li>
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
                <li><a href="resultados.php">Consulte Seu(s) Número(s) da Sorte</a></li>
            </ul>
        </div>

    </div>

    <div id="slide-result">
        <img src="images/logo_premios_seculus.png" alt="promocao seculus"/>
    </div>

</header>

<section id="sorteios">

    <div>

        <article>

            <h3><?= $titulo ?></h3>
            <div>
                <form>
                    <fieldset>
                        <input type="hidden" name="type" id="type" value="<?= $tipo ?>"/>
                        <?= $selectRegional ?>
                        <?= $selectDate ?>
                        <input type="submit" id="btn-sorteio" class="btn-sorteio" value="Buscar"/>
                    </fieldset>
                </form>
            </div>

            <div id="ganhadores">
                <h4>Parabéns aos ganhadores! <br>Seu número da sorte continua valendo!</h4>
            </div>

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
