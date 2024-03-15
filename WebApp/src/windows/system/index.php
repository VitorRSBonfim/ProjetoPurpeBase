<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../system/index.html">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>PB</title>
</head>
<body>
    
    <?php 

        include_once '../autenticacao/_autenticar.php';

    
    ?>

    <div class="pagina">

        <!-- MENU LATERAL -->
        <div class="left-sidebar" id="sidebar">
          <!-- LOGO DO TOPO -->
          <a class="menu-logo" href="#">
            <i class="mdi mdi-code-not-equal-variant"></i>
            <?php 
                include_once '../autenticacao/pegarNomeUsuario.php';

                echo "Bem vindo $loginUsuarioSessao ID:$idUsuarioSessao";

            ?>
          </a>
          <!-- CONTEUDO DO CENTRO DO MENU -->
          <div class="conteudo-sidebar">
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>
            <a class="menu-item" href="#">Item</a>

            <a class="menu-item bottom" href="#">
              Item em baixo
            </a>
          </div>
        </div>
      
        <!-- MIOLO DA APLICAÇÃO -->
        <section class="w-100">
          <nav>
            <ul>
              <li>
                <a id="menuBtn" class="active" href="#">
                  <i class="mdi mdi-menu"></i>
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class="mdi mdi-school"></i>
                  LINK</a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class="mdi mdi-youtube"></i>
                  LINK
                </a>
              </li>
            </ul>
            
          </nav>
          <div style="overflow: auto; height: 100vh;" >
              
                <h1>
                    Conteudo software
                </h1>

          </div>
      
        </section>
      
        <!-- OVERLAY MOBILE -->
        <div class="overlay hidden" id="overlay"></div>
      
      </div>

    <script src="script.js"></script>

</body>
</html>