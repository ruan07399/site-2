<?php

include("conexao.php");
$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    header("Location: home.html");
    exit();
} else {
    echo "E-mail ou senha incorretos.";
}

?>