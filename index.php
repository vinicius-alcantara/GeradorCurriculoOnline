<?php
$statusCad = isset($_GET["statusCad"]) ? $_GET["statusCad"] : 0;
$statusDelete = isset($_GET["statusDelete"]) ? $_GET["statusDelete"] : 0;
$statusLogin = isset($_GET["statusLogin"]) ? $_GET["statusLogin"] : 0;
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>My Curriculum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../curriculo/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../curriculo/css/style.css">
    <link rel="stylesheet" type="text/css" href="../curriculo/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../curriculo/hover/css/hover-min.css" media="all">
    <script type="text/javascript" src="js/shButtonPass.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="jumbotron-fluid" id="cadastro">
            <h1 id="titulo-animado" class="display-4">My Curriculum</h1>
            <h2 class="text-center">Cadastre-se!</h2>
            <hr class="my-2">
            <?php
              $statusCadMen1 = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Usuário ou Email já existe na base de dados!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';

              $statusCadMen2 = '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Usuário cadastrado com sucesso!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';

              if($statusCad == 1){
                  echo $statusCadMen1;
              } elseif ($statusCad == 2){
                  echo $statusCadMen2;
              }
            ?>
            <form method="POST" action="cadastro.php">
              <div class="form-group">
                <label for="iNomeCad"><strong>Nome:</strong></label>
                <div class="input-group">
                <span class="input-group-addon">
                  <button class="fas fa-user cad-user-icon"></button>
                </span>
                  <input type="text" class="form-control" id="iNomeCad" name="nNomeCad" placeholder="Nome Completo" required>
                </div>  
                  <br>
                <label for="iEmailCad"><strong>Email:</strong></label>
                <div class="input-group">
                <span class="input-group-addon">
                  <button id="cad-email-icon" class="fas fa-envelope-open-text"></button>
                </span>
                  <input type="email" class="form-control" id="iEmailCad" name="nEmailCad" placeholder="E-mail" required>
                </div>  
                <br>
                <label for="iUserCad"><strong>Usuário:</strong></label>
                <div class="input-group">
                <span class="input-group-addon">
                  <button class="far fa-user cad-user-icon"></button>
                </span>
                  <input type="text" class="form-control" id="iUserCad" name="nUserCad" placeholder="Nome de Usuário" required>
                </div>  
                  <br>
                <label for="iSenhaCad"><strong>Senha:</strong></label>
                <div class="input-group">
                <span class="input-group-addon">
                  <button id="cad-senha-icon" class="fas fa-lock"></button>
                </span>  
                  <input type="password" class="form-control" id="iSenhaCad" name="nSenhaCad" placeholder="Senha" required>
                </div>
                  <br>
                <input type="submit" class="btn btn-primary btn-md hvr-pulse-grow" value="Cadastrar">
                <a href="#" class="btn btn-danger hvr-buzz-out" data-toggle="modal" data-target="#Ijan-modal-descadastrar">Já sou Cadastrado | Descadastrar</a>
              </div>
            </form>
          </div>
          </div>

        <div class="col-sm-6">
          <div class="jumbotron">
            <div id= "login-box-principal" class="container">
            <div id="bk-titulo-login">
            <div id="titulo-login" class="text-center">
                <h3>Login</h3>
              </div>
            </div>
            <div id="login-box-body">
            <?php
                $statusLoginMen = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Os dados do usuário são inválidos!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
              
                if($statusLogin == 1){
                  echo $statusLoginMen;
                }
            ?>
              <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="iUserLogin"><strong>Usuário:</strong></label>
                      <div class="input-group">
                        <span class="input-group-addon">
                        <button class="far fa-user cad-user-icon"></button>
                        </span>
                        <input type="text" class="form-control" id="iUserLogin" name="nUserLogin" placeholder="Nome de Usuário" required>
                      </div>
                      <br>
                      <label for="iSenhaLogin"><strong>Senha:</strong></label>
                      <div class="input-group">
                      <span class="input-group-addon">
                        <button id="cad-senha-icon" class="fas fa-lock"></button>
                      </span>   
                      <input type="password" class="form-control" id="iSenhaLogin" name="nSenhaLogin" placeholder="Senha" required>
                      <div id="btn-pass">
                      <button id="eye" type="button" class="btn fas fa-eye-slash ml-auto" onclick="shSenha()"></button>
                      </div>    
                      </div>
                      <br>
                      <a href="#" data-toggle="modal" data-target="#Ijan-modal-senha"><p>Esqueceu a Senha?</p></a>
                      <br>
                      <input type="submit" class="btn btn-primary btn-md hvr-float" value="Entrar">
                </div>
              </form>
              
<!-- Modal Update Senha-->
<div class="modal fade" id="Ijan-modal-senha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Redefinir Senha</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="" action="">
            <div class="form-group">
                <label for="iemailUpdate"><strong>Email:</strong></label>
                <div class="input-group">
                <span class="input-group-addon">
                  <button id="cad-email-icon" class="fas fa-envelope-open-text"></button>
                </span>
                  <input type="email" class="form-control" id="iEmailUpdate" name="nEmailUpdate" placeholder="E-mail" required>
                </div>
                  <br/>
                  <label for="iUserUpdate"><strong>Usuário:</strong></label>
                <div class="input-group">
                <span class="input-group-addon">
                  <button class="far fa-user cad-user-icon"></button>
                </span>
                  <input type="text" class="form-control" id="iUserUpdate" name="nUserUpdate" placeholder="Nome de Usuário" required>
                </div>
                <br>  
                <label for="iNewSenhaUpdate"><strong>Nova Senha:</strong></label>
                      <div class="input-group">
                      <span class="input-group-addon">
                        <button id="cad-senha-icon" class="fas fa-lock"></button>
                      </span>  
                        <input type="password" class="form-control" id="iNewSenhaUpdate" name="nNewSenhaUpdate" placeholder="Nova Senha" required>
                      </div> 
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
          <input type="submit" class="btn btn-primary btn-md" value="Redefinir">
          </form>
        </div>
      </div>
    </div>
  </div>
  
<!-- Modal Deletar Cadastro-->
<div class="modal fade" id="Ijan-modal-descadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Remover Cadastro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <?php
          $statusDelMen1 = '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Cadastro removido com sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';

          $statusDelMen2 = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Os dados fornecidos são inválidos!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          
          if($statusDelete == 1){
              echo $statusDelMen1;
          } elseif ($statusDelete == 2){
              echo $statusDelMen2;
          }
        ?>
          <form method="POST" action="removeCad.php">
            <div class="form-group">
                <label for="iemailDelete"><strong>Email:</strong></label>
                <div class="input-group">
                <span class="input-group-addon">
                  <button id="cad-email-icon" class="fas fa-envelope-open-text"></button>
                </span>
                  <input type="email" class="form-control" id="iEmailDelete" name="nEmailDelete" placeholder="E-mail" required>
                </div> 
                <br/>
                <label for="iSenhaDelete"><strong>Senha:</strong></label>
                <div class="input-group">
                <span class="input-group-addon">
                  <button id="cad-senha-icon" class="fas fa-lock"></button>
                </span>  
                  <input type="password" class="form-control" id="iSenhaDelete" name="nSenhaDelete" placeholder="Senha" required>
                </div>   
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
          <input type="submit" class="btn btn-primary" value="Remover">
          </form>
        </div>
      </div>
    </div>
  </div>
            </div>
            </div>          
          </div>
          <div id="rodape-login">
            <p class="text-center" style="color: #007bff";>&copy; 2019 <br/>
            Developed by Vinícius Alcântara<br/>
            Version 1.0</p>
          </div>
          </div>
        </div>
        </div>
      </div>
    </div> 
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../curriculo/js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="../curriculo/js/popper.min.js"></script>
    <script type="text/javascript" src="../curriculo/bootstrap/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
      function typeWriter(elemento){
        const textoArray = elemento.innerHTML.split('');
        elemento.innerHTML = '';
        textoArray.forEach((letra, i) => {
        setTimeout(() => elemento.innerHTML += letra, 130 * i);
        });
      }
      const titulo = document.querySelector('h2');
      typeWriter(titulo);  
    </script>

    <!-- Chama modal Descadastrar automaticamente -->
    <?php
      if($statusDelete == 1 || $statusDelete == 2){ ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#Ijan-modal-descadastrar').modal('show');
          }) ;
        </script>
      <?php } ?>
  </body>
</html>