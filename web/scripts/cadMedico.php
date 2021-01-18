<?php

require_once "../conf.php";
require_once "cadMedicoDatas.php";

//gerador de ID
$token = md5(uniqid(rand(), true));

//Verificação simples de campo vazio
if ((isset($_POST['crm'])) && (!empty($_POST['crm']))) {
//Array de datas 
    if (!empty($_POST['dataInicio'])) {
        $dataInicio = $_POST["dataInicio"];
        $dataFim = $_POST["dataFim"];

        $array_datas = criarIntervaloDatas($dataInicio, $dataFim);

        $datas = implode(" | ", $array_datas);
    }

//Array de dias da semana
    if (!empty($_POST['arraydia'])) {
        $diasSemanas = $_POST['arraydia'];
        $recorrente = '';
        for ($i = 0; $i < count($diasSemanas); $i++) {
            $recorrente = "$recorrente|$diasSemanas[$i] ";
        }
    }

//Recebendo dados do formulário 
    $proId = $token;
    $nome = $_POST['nome'];
    $crm = $_POST['crm'];
    $especialidades = $_POST['especialidades'];
    $dataUnica =  date('d-m-Y', strtotime($_POST["dataUnica"]));
    $hentrada = $_POST['hentrada'];
    $hsaida = $_POST['hsaida'];

//Inserindo dados no banco de dados
    $cadsql = "INSERT INTO cadpro (proId, nome, crm, especialidades)
    VALUES ('$proId','$nome','$crm','$especialidades')";
    $inserir = mysqli_query($conexao, $cadsql);

    $cadsql2 = "INSERT INTO caddis (proId,dataUnica,periodo,hentrada,hsaida,recorrente)
    VALUES ('$proId','$dataUnica','$datas','$hentrada','$hsaida','$recorrente')";
    $inserir = mysqli_query($conexao, $cadsql2);

//Verificador se tudo foi enviado corretamente
    if (mysqli_affected_rows($conexao) > 0) { //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<script>alert('Dados enviados com sucesso!');location.href = '../index.php';</script>";
    } else {
        echo "<script>alert('Erro ao inserir dados!');location.href = '../index.php';</script>";
    }
    mysqli_close($conexao);
} else {
    //Resposta se não preencheu o campo CRM
    echo "<h1>Por favor, preencha os dados</h1>";
}
