<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Purple Base</title>
</head>
<body>

    <?php 
                    
        include '_logar.php';
        include '_registrar.php';

    ?>

    
    <div class="bg-header">
        <header>
            <nav >
                <ul class="ul-img" >
                    <li>
                        <a href="">
                            <div  style="height: 50px; width: 30px;" >

                            </div>
                        </a>
                    </li>
                    
                </ul>
                <ul style="margin-bottom: 0px;" class="ul-aunt" >
                    <li>
                        <a href="src/windows/autenticacao/registro.html"><button class="btn-registro" >Já tem uma conta?</button></a>
                    </li>
                    <li>
                        <a href="login.php"><button class="btn-login" >Login</button></a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="container-mine">

        <div class="box">

            <p class="text-center mt-4 mb-4" >Vamos Começar</p>

            <form action="registro.php" method="post">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-9 col-9 mb-4">
                        <label class="mb-2" for="">Nome Completo</label>
                        <input type="text" name="nome" id="nome" placeholder="Insira seu Nome" autocomplete="off"  class="form-control" >
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-9 col-9 mb-4">
                        <label class="mb-2" for="">Email</label>
                        <input type="text" name="email" id="email" placeholder="Insira seu E-mail" autocomplete="off"  class="form-control" >
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-9 col-9 mb-4">
                        <label class="mb-2" for="">Senha</label>
                        <input type="text" name="senha" id="senha" placeholder="Insira a senha" autocomplete="off"  class="form-control">
                        
                    </div>
                </div>
                

                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-9 col-9 ">
                        <button formaction="registro.php" name="cad" id="cad" class="btn-logar mb-4">Cadastrar</button>
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div style="padding: 0;" >
                        <hr>
                        
                        <p style="display: flex; align-itens: center; margin-left: 30px; font-size: 10px;" >
                            Ao clicar no botão acima, você concorda com nossos &nbsp;<a href=""> termos de serviço </a> &nbsp; e <a href="">  &nbsp; política de privacidade.</a>
                            
                            
                        </p>
                        
                    </div>
                </div>


               
            </form>
        </div>

    </div>

    <?php 

        include_once '_logar.php';
       

    ?>

</body>
</html>