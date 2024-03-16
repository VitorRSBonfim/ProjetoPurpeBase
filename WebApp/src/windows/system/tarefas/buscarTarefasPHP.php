
<?php 

    include_once 'conn.php';

    try {

        $sql = $conn -> query('select * from projeto');

        if($sql->rowCount()>0)
        {

            $c = 1;

            foreach($sql as $linha)
            {
        
                echo '
                        <div class="pai" >
                            <p onclick="mostarNome('.$linha[0].')" id="a'.$linha[0].'" > '.$linha[1].' </p>

                            

                        </div>';
                
                
            }
        }else{
                
            $mensagem = "Usuário não encontado";

            
                
        }

    } catch ( PDOException $error) {

        echo $erro->getMessage();

    }

?>



