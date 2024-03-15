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

        echo $idUsuarioSessao;

    ?>

    <nav class="menu-lateral">

        <div style="display: flex;" class="btn-menu">
            <i style="font-weight: lighter; font-size: 40px;" class="bi bi-list" id="btn-opnn"></i>
            <h1 style="color: white; margin-left: 20px;" >asasas</h1>
        </div>

        <ul>
            <li class="menu-item ativo" >
                <a href="#">
                    <span class="icon" ><i class="bi bi-menu-button"></i></span>
                    <span class="txt-link">Todas as Tarefas</span>
                </a>
            </li>
            <li class="menu-item" >
                <a href="#">
                    <span class="icon" ><i class="bi bi-calendar4-range"></i></span>
                    <span class="txt-link">Linha do Tempo</span>
                </a>
            </li>
            <li class="menu-item" >
                <a href="#">
                    <span class="icon" ><i class="bi bi-chat-left-text"></i></span>
                    <span class="txt-link">Mensagens</span>
                </a>
            </li>
            <li class="menu-item" >
                <a href="#">
                    <span class="icon" ><i class="bi bi-person-circle"></i></span>
                    <span class="txt-link">Perfil</span>
                </a>
            </li>
            <li class="menu-item" >
                <a href="#">
                    <span class="icon" ><i class="bi bi-gear"></i></span>
                    <span class="txt-link">Configurações</span>
                </a>
            </li>
            
            
        </ul>

    </nav>

    <script src="script.js"></script>

</body>
</html>