
<?php 

    include_once 'conn.php';
    

    try {

        $sql = $conn -> query('select ID_Projeto,Nome_Projeto from projeto join itemProjeto on '.$_SESSION['idUsuarioLogin'].' = ID_Usuario_itemProjeto and ID_Projeto_itemProjeto = ID_Projeto
        ');
        
        if($sql->rowCount()>0)
        {

            $c = 1;

            foreach($sql as $linha)
            {
        
                echo '
                        <div class="pai" >
                            <p onclick="mostarNome('.$linha[0].')" id="a'.$linha[0].'" > '.$linha[1].'  </p>
                        </div>';
                
                try {
                    
                    $sql = $conn -> query( 'select distinct Nome_Tarefa, ID_Tarefa from tarefa join itemTarefa on '.$linha[0].' = ID_Projeto_itemTarefa and ID_tarefa = ID_Tarefa_itemTarefa');

                    foreach($sql as $linha) {

                        echo '<p class="p" >'.$linha[0].'</p>';

                    }


                } catch (PDOException $error) {
                    echo $error -> getMessage();
                }
                
            }
        }else{
                
            $mensagem = "Usuário não encontado";

            
                
        }

    } catch ( PDOException $error) {

        echo $error ->getMessage();

    }

    

?>



