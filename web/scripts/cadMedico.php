<?php require_once "../conf.php";

$token = md5(uniqid(rand(), true));
echo ($token);

if ((isset($_POST['crm']))&&(!empty($_POST['crm']))){

    $proId = $token;
    $nome = $_POST['nome']; 
    $crm = $_POST['crm'];
    $especialidades = $_POST['especialidades'];
    $data = date('d/m/Y', strtotime($_POST['dat']));;
    $hentrada = $_POST['hentrada'];
    $hsaida = $_POST['hsaida'];

    $cadsql = "INSERT INTO cadpro (proId, nome, crm, especialidades)
    VALUES ('$proId','$nome','$crm','$especialidades')";
    $inserir = mysqli_query($conexao, $cadsql);

    $cadsql2 = "INSERT INTO caddis (proId,dat,hentrada,hsaida)
    VALUES ('$proId','$data','$hentrada','$hsaida')";
    $inserir = mysqli_query($conexao, $cadsql2);

    if(mysqli_affected_rows($conexao)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<script>alert('Dados enviados com sucesso!');location.href = '../index.php';</script>";
    } else {
        echo "<script>alert('Erro ao inserir dados!');location.href = '../index.php';</script>";
    }
    mysqli_close($conexao); //fecha conexão com banco de dados
 }else{
     echo "<h1>Por favor, preencha os dados</h1>";
 }