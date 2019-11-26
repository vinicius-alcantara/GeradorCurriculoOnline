<?php
    session_start();
    if(!isset($_SESSION["usuario"])) header("Location: index.php?statusLogin=1");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Curriculum</title>
    <link rel="stylesheet" href="../mycurriculo/bootstrap/css/bootstrap.min.css">
</head>
<body style="background-color: #E8E8E8; margin-top: 105px;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #4169E1;">
        <a class="navbar-brand h1 mb-0" style="color: white;" href="#"><h2>My Curriculum</h2></a>
        <a class="btn btn-danger ml-auto" href="sair.php" role="button">Sair</a>
    </nav>
    <main class="container" style="margin-top:20px">
        <form action="gerarCurriculo.php" method="post" target="_blank" enctype="multipart/form-data">
            <div class="card">
                    <div style="background-color: #483D8B; color: white; padding: 15px; border: none;">
                    <h4 class="card-title">Informações Gerais:</h4>
                    </div>
                    <div class="card-body">         
                    <div class="form-group">
                        <label for="nome"><strong>Nome:</strong></label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cargo"><strong>Cargo Pretendido:</strong></label>
                                <input type="text" class="form-control" name="cargo" id="cargo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="foto"><strong>Foto:</strong></label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="endereco"><strong>Endereço:</strong></label>
                        <input type="text" class="form-control" name="endereco" id="endereco">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefone"><strong>Telefone:</strong></label>
                                <input type="text" class="form-control" name="telefone" id="telefone">
                            </div>
                        </div> 
                        <div class="col">
                            <div class="form-group">
                                <label for="email"><strong>E-mail:</strong></label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="resumo"><strong>Resumo:</strong></label>
                        <textarea class="form-control" name="resumo" id="resumo"></textarea>
                    </div>
                </div>

                <div class="card-body"  style="background-color: #483D8B; color: white;padding: 15px; border: none;">
                    <h4 class="card-title">Formação:</h4>
                </div>
                <br>
                <div id="div-formacoes" style="background-color: white; padding-left: 20px; border: none;">
                    <button class="btn btn-sm right btn-warning" id="btn-adicionar-formacao" title="Adicionar formação">Adicionar formação</button>
                </div>
                <br>
                <div class="card-body" style="background-color:#483D8B; color: white; padding: 15px; border: none;">
                    <h4 class="card-title">Experiência:</h4>
                </div>
                <br>
                <div id="div-experiencias" style="background-color: white; padding-left: 20px; border: none;">
                <button class="btn btn-sm right btn-warning" id="btn-adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
                </div>
                <br>
                <div style="background-color:#483D8B; color: white; padding: 15px; border: none;">
                <h4 class="card-title">Modelo de Currículo:</h4>
                </div>
                <div class="card-body" id="div-experiencias">
                    
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="modelo" id="modelo1" value="modelo1" checked> <strong>Moderno preto</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                 <input class="form-check-input" type="radio" name="modelo" id="modelo2" value="modelo2"><strong>Moderno azul</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="modelo" id="modelo3" value="modelo3"><strong>Básico</strong>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Gerar Currículo</button>
                    <button class="btn btn-success" type="reset">Limpar Campos</button>
                </div>
            </div>
        </form>
    </main>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../mycurriculo/js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="../mycurriculo/js/popper.min.js"></script>
    <script type="text/javascript" src="../mycurriculo/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>