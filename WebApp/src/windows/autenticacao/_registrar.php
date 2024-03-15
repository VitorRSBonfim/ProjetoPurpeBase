
<?php 

    include_once 'conn.php';

    if (isset($_POST['cad'])) {

        try {

            $sql = "insert into usuario (Nome_Usuario, Email_Usuario, Senha_Usuario) values (?,?,?)";
            $stmt = $conn -> prepare($sql);
            $stmt -> execute([$_POST['nome'], $_POST['email'], $_POST['senha']]);

        } catch(PDOException $erro){
 
            $erro ->getMessage();
 
        }

    }

?>


