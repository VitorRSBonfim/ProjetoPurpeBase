<?php 

    /*Iniciando sessão 

    session_start();

    /*Pegando informções digitadas nos campos EMAIL E SENHA 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    /* Fazendo a busca dos usuarios na database 

    $sql = $autc -> query ("select * from usuario where Email_Usuario = $email and Senha_Usuario = $senha");

    */

    session_start();
 
    if(isset($_SESSION['idUsuarioLogin'])){
 
        $idUsuarioSessao = $_SESSION['idUsuarioLogin'];
        $nomeUsuarioSessao = $_SESSION['nomeUsuarioLogin'];
       

        $id =  $_SESSION['idUsuarioLogin'];
 
    }else{
 
        header('Location:login.php');
 
    }



?>