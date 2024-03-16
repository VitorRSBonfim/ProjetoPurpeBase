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

              <p style="color: white;" >
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
        
        
        <h1  style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi a in possimus fuga odit dolorum tenetur error ducimus, voluptas omnis. Eaque aspernatur soluta repellat rerum tenetur dolorum maiores nemo autem?</h1>

        <div class="conteudo-php">
          
          <div class="card-tarefas">

            

          </div>

        </div>

      </div>
      

    </div>
    
    <script src="script.js"></script>

</body>
</html>