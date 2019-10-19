<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$result = '';

// Create connection
$conn = new mysqli($servername, $username, $password,'db_showseculus');
$type_zone = '';
if(isset($_POST["type_zone"])) {
    $type_zone = $_POST["type_zone"];
    $type_zone = 'and type_zone = ' . $type_zone;
}
if(isset($_POST["date_drawn"])) {
    $date_drawn = $_POST["date_drawn"];
}
if(isset($_POST["type"])) {
    $type = $_POST["type"];
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {

    $sql = "select s.*, c.*
    from sweepstakes s
    left join cnpjxnum c
    on s.cnpj = c.cnpj 
    where type = '$type'
    and date_drawn = '$date_drawn' ''$type_zone'";

    $res = $conn->query($sql);

    $result = '';
    while ($row = $res->fetch_assoc()) {
        $result.=  '<p>Pedido: ' . $row["cnpj"];
        $count ++;
    }
    if($count == 0){
        $result.=  '<p>O CNPJ não possui números da sorte!</p>';
    }


    $result.= '<p>Caso sua empresa seja comtemplada, entraremos em contato.</p></div>';

}

echo $result; exit();

?>