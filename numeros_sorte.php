<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$result = '';

// Create connection
$conn = new mysqli($servername, $username, $password,'db_showseculus');
if(isset($_POST["search_cnpj"])) {
    $search_value = $_POST["search_cnpj"];
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    $search = preg_replace("/[^0-9]/", "", $search_value);
    $sql = "select * from cnpjxnum where cnpj = '$search'";

    $res = $conn->query($sql);
    //print_r($res);die;
    $result.= '<div class="num"><h3>NÚMERO(S) DA SORTE para o CNPJ: ' . $search_value . '</h3>';

    $count = 0;
    while ($row = $res->fetch_assoc()) {
        $result.=  '<p>Pedido: ' . $row["pedido"]. '<br />Marca(s): ' . $row["marca"]. '</p><p>Número(s) da Sorte: ' .$row["num_sorte"] . '<br /><span>(Válido para todos os sorteios)</span></p>';
        $count ++;
    }
    if($count == 0){
        $result.=  '<p>O CNPJ não possui números da sorte!</p>';
    }


    $result.= '<p>Caso sua empresa seja comtemplada, entraremos em contato.</p></div>';

}

echo $result; exit();

?>