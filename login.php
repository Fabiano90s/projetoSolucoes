<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
</head>
<body>
    <?php
        require('header.php');
        include_once('conexao.php');
    ?>
    <div class="container">
        <div>
            <h1>Login</h1>
            <form action="perfil.php" method="POST">
                <input type="text" name="emailLogin" placeholder="E-mail">
                <input type="password" name="senhaLogin" placeholder="Senha">
                <button type="submit">Acessar</button>
            </form>
         
        </div>
    </div>
    <?php
        require('footer.php');
    ?>
</body>
</html>