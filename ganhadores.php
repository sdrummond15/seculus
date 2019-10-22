<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$result = '';

// Create connection
$conn = new mysqli($servername, $username, $password, 'db_showseculus');
$type_zone = '';
if (isset($_POST["type_zone"])) {
    $type_zone = $_POST["type_zone"];
    $type_zone = "and type_zone = '" . $type_zone . "'";
}
if (isset($_POST["date_drawn"])) {
    $date_drawn = $_POST["date_drawn"];
}
if (isset($_POST["type"])) {
    $type = $_POST["type"];
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    $sql = "select s.*, c.*
    from sweepstakes s
    left join cnpjxnum c
    on s.cnpj = c.cnpj 
    where type = '$type'
    and date_drawn = '$date_drawn' " . "$type_zone";

    $res = $conn->query($sql);

    $count = 0;
    $result = '<h4>Parabéns aos ganhadores! <br>Seu número da sorte continua valendo!</h4>';
    while ($row = $res->fetch_assoc()) {
        $result .= '<div class="ganhador_sorteio">';
        $result .= '<img src="' . $row["image"] . '" alt="' . $row["premium"] . '"/>';
        $result .= '<h3>' . $row["premium"] . '</h3>';
        $result .= '<p>Número do pedido: ' . $row["pedido"] . '</p>';
        $result .= '<p>Razão Social: ' . $row["razao_social"] . '</p>';
        $result .= '<p>Número do pedido: ' . $row["sort_number"] . '</p>';
        $result .= '<p>Marca: ' . $row["marca"] . '</p>';
        $result .= '</div>';
        $count++;
    }
    if ($count == 0) {
        $result = '<p>Não houveram ganhadores para essa data!</p>';
    }

}

echo $result;
exit();

?>