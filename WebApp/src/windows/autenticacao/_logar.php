<?php
 
    include_once('conn.php');

    $mensagem = "";
 
    if($_POST){
 
        try{
 
            $sql = $conn->query("
                select * from usuario where
                Email_Usuario = '".$_POST['email']."'
                and
                Senha_Usuario = '".$_POST['senha']."'
 
            ");
 
            if($sql->rowCount()==1){
 
                foreach($sql as $linha){
 
                    session_start();
                    $_SESSION['idUsuarioLogin'] = $linha[0];
                    $_SESSION['nomeUsuarioLogin'] = $linha[1];
                    header('location:../system/index.php
                    ');
 
                }
 
            }else{
 
                $mensagem = "Usuário ou senha inválida";
 
            }
 
        }catch(PDOException $erro){
 
            $erro ->getMessage();
 
        }
 
    }
 
?>