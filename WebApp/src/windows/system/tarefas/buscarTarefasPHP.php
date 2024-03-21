
<?php 

    include_once 'conn.php';
    

    try {

        $sql = $conn -> query('select * from usuario ');

        if($sql->rowCount()>0)
        {
            foreach($sql as $linha)
            {
                echo $linha[0];
                
            }
        }else{
            
            $mensagem = "Usuário não encontado";
            
        }

    } catch (PDOException $erro)
    {
        echo $erro->getMessage();
    }  

    

?>



