<?php 

    include_once 'conn.php';
    include_once '_autenticar.php';

    $nome = "";

    if (isset($_POST['cad'])) {

        try {

            $sql = $conn -> query('select Nome_Usuario from usuario where ID_Usuario = '.$idUsuarioSessao.' ');

            if($sql->rowCount()>0)
            {
                foreach($sql as $linha)
                {
                    $nome = $linha[0];
                    
                }
            }else{
                
                $mensagem = "Usuário não encontado";
                
            }

        } catch (PDOException $erro)
        {
            echo $erro->getMessage();
        }  

    }

?>