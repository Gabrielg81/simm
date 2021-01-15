<?php require_once "conf.php";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if ($conexao->connect_error) {
    die("Falha na conexão mysql: " . $conexao->connect_error);
}

$sql = "SELECT * FROM caddis INNER JOIN cadpro ON caddis.proId = cadpro.proId";
$result = $conexao->query($sql);

$conexao->close();

?>