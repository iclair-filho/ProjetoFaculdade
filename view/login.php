<?php require_once "include/header.html"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="container-info">
            <div class="form-text"><h2>Login</h2></div>
        </div>
        <form action="" method="">
            <div class="mb-3">
                <label class="form-label">Usuário</label>
                <input type="text" class="form-control" placeholder="Usuário" name="usuario" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" placeholder="Senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-success">Entrar</button>
            <div class="form-text">
                <p>Não possui uma conta?</p><a class="cadastrar" href="cadFeirante.php">Clique aqui</a><p>para criar uma.</p>
            </div>
        </form>
    </div>
</body>
</html>