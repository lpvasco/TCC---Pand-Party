<?php
    require_once 'ClassesCadastro/usuarios.php';
    $u = new Usuario;
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fontscadastro/icomoon/style.css">

    <link rel="stylesheet" href="csscadastro/owl.carousel.min.css">


    <link rel="stylesheet" href="csscadastro/bootstrap.min.css">
    

    <link rel="stylesheet" href="csscadastro/style.css">

    <title>Cadastrar - Pand Party</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                    <center>
                      <div><h1><Strong>Cadastro</Strong></h1></div>
                      <div><img src="images/pandapng.png" width="125" height="125"></div>
                    
                      <h5>Pand Party</h5>
                    </center>
                </div>
                <form action="#" method="post">
                  <div class="form-group first">
                    <label for="email"></label>
                    <input placeholder="Nome" type="text" class="form-control" name="email" id="email" maxlength="40">

                  </div>
                  <div class="form-group first">
                    <label for="username"></label>
                    <input placeholder="E-mail" type="text" class="form-control" name="nome" id="usuario" maxlength="30">

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password"></label>
                    <input placeholder="Senha" type="password" class="form-control" name="senha" id="senha" maxlength="15">
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                  </div>
                  
                  <center>
                    <form>
                      <input type="button" class="btn btn-info" value="Voltar" onClick="JavaScript: window.history.back();">
                    </form>
                    <input type="submit" class="btn btn-info btn-lg" value="Cadastrar">
                  </center>
                  
            
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

<?php

    if(isset($_POST['nome']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(!empty($nome) && !empty($email) && !empty($senha))
        {
            $u->conectar("aula","ccb.caadrunpzxys.us-east-2.rds.amazonaws.com","aluno","Aluno@ccb2021");
            if($u->msgErro == "")
            {
                if($u->cadastrar($nome,$email,$senha))
                {
                    ?>
                    <div id="msg-sucesso">
                      Cadastrado com sucesso! Acesse para entrar!
                    </div>
                    <?php
                }
                else
                {
                    ?>
                    <div class="msg-erro">
                      Email ja cadastrado!
                    </div>
                    <?php
                }
            }
            else
            {
                ?>
                <div class="msg-erro">
                  <?php echo "Erro: ".$u->msgErro;?>
                </div>
                <?php
            }
        }
        else
        {
          ?>
            <div class="msg-erro">
            Preencha todos os campos!
            </div>
          <?php
        }
    }
?>
    

  </body>
</html>