<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <script src="js/javaScript.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@500&display=swap" rel="stylesheet">
    <?php include_once('conexao.php') ?>
</head>
<body>
    <?php
        require('header.php');
    ?>

    <div class="container">
        <form action="contato.php"" method="POST">
            <input type="caracter" name="fNome" placeholder="Nome" autofocus required>
            <input type="email" name="fEmail" placeholder="E-Mail" required>
            <textarea name="fDescricao" placeholder="Descrição" required></textarea>
            <select name="fCategoria" id="formCategorias" required>
                <option value="processador">Processadores</option>
                <option value="windows">Windows</option>
                <option value="hd">HD</option>
                <option value="memoria">Memória</option>
                <option value="placaMae">Placa Mãe</option>
                <option value="placaVideo">Placa de Video</option>
                <option value="monitor">Monitor</option>
            </select>
            <button class="btnEnviar" type="submit" value="Enviar" name="btnEnviar">Enviar</button>
        </form>
    </div>
    
    <?php
            
            
            if(empty($_POST['fNome']) || empty($_POST['fEmail']) || empty($_POST['fDescricao']) || empty($_POST['fCategoria'])){
                echo ('Variaveis vazias');
            }else{
                $nome = $_POST['fNome'];
                $email = $_POST['fEmail'];
                $descricao = $_POST['fDescricao'];
                $categoria= $_POST['fCategoria'];
                var_dump($nome,$email,$descricao,$categoria); 


                $sql = "INSERT INTO duvidas (nome, email, descricao, categoria)
                VALUES ('$nome'  , '$email', '$descricao', '$categoria')";
        
                if (mysqli_query($conn, $sql)) {
                echo "Inserido em Banco";
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
        
                mysqli_close($conn);    
            } 
    ?>
    

    
    
    <?php
        require('footer.php');
    ?>
</body>
</html>