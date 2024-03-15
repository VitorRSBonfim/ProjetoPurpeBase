<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <title>Purple Base</title>
</head>
<body>

    
    <div class="bg-header">
        <header>
            <nav >
                <ul class="ul-img" >
                    <li>
                        <a style="margin-right: 20px;" href="">
                            <img style="width: 80px;" src="../../images/logo-pb-400x400-semfundo.png" alt="" srcset="">
                        </a>
                    </li>
                    
                </ul>
                <ul class="ul-aunt" >
                    <li>
                        <a href="src/windows/autenticacao/registro.html"><button class="btn-registro" >Não tem uma conta?</button></a>
                    </li>
                    <li>
                        <a href="registro.html"><button class="btn-login" >registro</button></a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="container-mine">

        <div class="box">

            <p class="text-center mt-5 mb-5" >Bem Vindo novamente!</p>

            <form action="login.html" method="post">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-9 col-9 mb-4">
                        <label class="mb-2" for="">Email</label>
                        <input type="text" name="email" id="email" placeholder="Insira seu E-mail" class="form-control" >
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-9 col-9 mb-4">
                        <label class="mb-2" for="">Senha</label>
                        <input type="text" name="senha" id="senha" placeholder="Insira a senha" class="form-control">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-9 col-9 ">
                        <button formaction="login.php" class="btn-logar mb-4"><?php echo 'sss' ?></button>
                    </div>

                    <div class="col-sm-12">
                        <?php 

                            include_once '_logar.php';

                            echo $mensagem;

                        ?>
                    </div>

                </div>
            </form>
        </div>

    </div>

</body>
</html>