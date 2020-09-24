<?php
    session_start();
    include_once('conexao.php');

    //verificando se os POST email e senha não estão vazios
    if(empty($_POST['emailLogin']) || empty($_POST['senhaLogin'])){
        header('location: login.php');
        exit();
    }
    
    //Pegando os dados enviados por metodo POST e armazenando nas variaveis
    $usuario = mysqli_real_escape_string($conexao, $_POST['emailLogin']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senhaLogin']);

    //comando SQL
    $query = "select * from usuario where email = '$usuario' and senha = '$senha'";

    //abrindo conexao no banco, executando o comando SQL e guardando na variavel resultado
    $resultado = mysqli_query($conexao,$query);

    //Pegando quantas linhas de resultado trouxe o comando SQL
    $row = mysqli_num_rows($resultado);

    if($row == 1){
        $campo = mysqli_fetch_array($row);

        printf($campo['nome']);
    }else{
        header('location: login.php');
    }
?>