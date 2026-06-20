<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro - Ruan Designs</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-container">

    <h1>Ruan Designs</h1>

    <h2>Entrar</h2>
    <form action="login.php" method="POST">

        <input type="email" name="email" placeholder="E-mail" required>

        <input type="password" name="senha" placeholder="Senha" required>

        <button type="submit">Entrar</button>

    </form>

    <br>

    <h2>Criar Conta</h2>

    <form action="cadastro.php" method="POST">

        <input type="text" name="nome" placeholder="Nome" required>

        <input type="email" name="email" placeholder="E-mail" required>

        <input type="password" name="senha" placeholder="Senha" required>

        <button type="submit">Cadastrar</button>

    </form>

</div>

</body>
</html>