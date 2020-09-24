<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <?php include_once('conexao.php') ?>
</head>
<body>
    <?php
        require('header.php');
    ?>

    <div class="container">
        <div>
            <h1>Cadastro</h1>
            <form action="cadastro.php" method="POST">
                <input type="text" name="cadNome" placeholder="Nome" required>
                <input type="text" name="cadSobrenome" placeholder="Sobrenome" required>
                <input type="text" name="cadEmail" placeholder="Email" required>
                <input type="password" name="cadSenha"placeholder="Senha" required>
                <input type="password" placeholder="Confirma senha" required>

                <button type="submit">Cadastrar</button>
            </form>
   
        </div>

        <?php
            if(empty($_POST['cadNome']) || empty($_POST['cadSobrenome']) || empty($_POST['cadEmail']) || empty($_POST['cadSenha'])){
                echo ('Variaveis vazias');
            }else{
                $nome = $_POST['cadNome'];
                $sobreNome = $_POST['cadSobrenome'];
                $email = $_POST['cadEmail'];
                $senha = $_POST['cadSenha'];
                
                var_dump($nome,$sobreNome,$email,$senha); 


                $sql = "INSERT INTO usuario (nome, sobrenome, email, senha)
                VALUES ('$nome'  , '$sobreNome', '$email', '$senha')";
        
                if (mysqli_query($conn, $sql)) {
                echo "Inserido em Banco";
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
        
                mysqli_close($conn);    
            } 
        ?>
    </div>
    <?php
        require('footer.php');
    ?>
</body>
</html>