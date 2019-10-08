<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Seculus</title>
<link rel="icon" type="image/png" href="images/favicon.png"/>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,'db_showseculus');
$search_value=$_POST["search_cnpj"];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    $sql = "select * from cnpjxnum where cnpj like '$search_value'";

    $res = $conn->query($sql);
    echo '<div class="resultado">
        <div id="slideresult">
        <img src="images/logo_premios_seculus.png" alt="promocao seculus"/>
    </div>
        <article>
            <h3>NÚMERO(S) DA SORTE para o CNPJ: ' . $search_value . '</h3>';

    while ($row = $res->fetch_assoc()) {
        echo '<div class="num"><p>Pedido: ' . $row["pedido"]. '<br />Marca(s): ' . $row["marca"]. '</p><p>Número(s) da Sorte: ' .$row["num_sorte"] . '<br /><span>(Válido para todos os sorteios)</span></p></div>';


    }

    echo '<p>Caso sua empresa seja comtemplada, entraremos em contato.</p></article>
            </div>';

}

?>
<footer>
<h3>QUANTO MAIS VOCÊ COMPRAR, MAIS CHANCE TEM DE GANHAR! </h3>
</footer>

</body>
</html>
