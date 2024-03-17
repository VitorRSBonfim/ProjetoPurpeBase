<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../system/index.html">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <!--Estilo para as classes criadas dentro do php -->

    <style>

      


    </style>

    <title>PB</title>
</head>
<body>
    
    <?php 

      include_once '../autenticacao/_autenticar.php';
      

      

    ?>

    
    <div class="container-pag">

      

      <div class="menu-side oppen" id="menu-side">
        <nav>

          <ul class="ul-usuario">
            <li>

              <i class="bi bi-person-circle"></i>

              <p  style="color: white;" >
                <?php 

                  echo $nomeUsuarioSessao;

                  
                  

                ?>
              </p>
            </li>
          </ul>

          <ul class="links-sidebar">

            <div>
              <li>
                <i class="bi bi-house"></i>
                <p>
                  
                  Inicio
                </p>
              </li>
              <li>
                <i class="bi bi-app-indicator"></i>
                <p>
                  Caixa de Entrada
                </p>
              </li>
              <li>
                <i class="bi bi-calendar"></i>
                <p>
                  Calendario
                </p>
              </li>
              <li>
                <i class="bi bi-chat-left"></i>
                <p>
                  Chat
                </p>
              </li>
            </div>

            <div>
              <li class="loggout-links">
                <button>Sair</button>
              </li>
            </div>

          </ul>

          
          
        </nav>
        
      </div>
    
      <div class="conteudo">

        <header>
          <ul>
            <li>
              <button id="btnAbrir">
                <span class="material-symbols-outlined">
                  menu
                </span>
              </button>
            </li>
          </ul>

          
          
        </header>
        
        
       

        <div class="conteudo-php">
          
          <div class="card-tarefas">

            <div class="card">
              <h1>
                Projetoa Pendentes
              </h1>

              
              <div class="aa">
                <?php
                
                  include_once 'tarefas/buscarTarefasPHP.php';

                  

                ?>
              </div>
              
              
            </div>
            
            <div class="card">
              <h1>
                Projetoa em Andamento
              </h1>

              
              
            </div>
            <div class="card">
              <h1>
                Projetoa concluidas
              </h1>
              
            </div>


          </div>

          

        </div>

      </div>
      

    </div>
    
    <script src="script.js"></script>

    <script>

      var input = document.getElementById('num');

      function mostarNome (id) {

        window.alert(id);

        input.value = id;


      }
      
      
    </script>

</body>
</html>