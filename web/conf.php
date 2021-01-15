<?php

$servidor = "localhost";
$banco = "test";
$usuario = "root";
$senha = "";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$siteNome = "SIMM";
$desc = "Sistema de Marcação de Consultas";
$img = "logo";
?>