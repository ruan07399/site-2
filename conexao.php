<?php

$host = "sql313.infinityfree.com";
$usuario = "if0_42215309";
$senha = "HfkTQ8bAeEVbbR";
$banco = "if0_42215309_ruandesignerbc";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

?>