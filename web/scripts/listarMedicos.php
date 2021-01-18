<?php require_once "conf.php";
//Listagem geral
$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if ($conexao->connect_error) {
    die("Falha na conexão mysql: " . $conexao->connect_error);
}

$sql = "SELECT * FROM caddis INNER JOIN cadpro ON caddis.proId = cadpro.proId";
$resultados = $conexao->query($sql);

//Consultas por nome
if(isset($_POST['submit'])){

   $pesquisar = $_POST['submit'];

   //analisar a volta de resultado
    $sql = "SELECT * FROM cadpro INNER JOIN caddis ON cadpro.proId = caddis.proId WHERE nome LIKE '%$nome%'";
    $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
    
    while($registro = mysqli_fetch_array($resultado)){
        $nome = $registro['nome'];
        echo $nome;
    }
    
}

$conexao->close();

?>