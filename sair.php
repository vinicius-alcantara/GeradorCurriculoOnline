<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["email"]);
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
  </head>
  <body>

  <!-- Modal -->
<div class="modal fade" id="sair-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Obrigado por sua visita!</h5>
        
      </div>
      <div class="modal-body">
        <strong>Aguardamos anciosamente o seu retorno!</strong>
      </div>
      <div class="modal-footer">
      <a class="btn btn-danger ml-auto" href="index.php" role="button">Fechar</a>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../curriculo/js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="../curriculo/js/popper.min.js"></script>
    <script type="text/javascript" src="../curriculo/bootstrap/js/bootstrap.min.js"></script>

<?php

if(!isset($_SESSION["usuario"])){ ?>

    <script>
        $(document).ready(function(){
            $('#sair-modal').modal('show');
        });
    </script>

<?php } ?>
  </body>
</html>
