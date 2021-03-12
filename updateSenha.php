<?php
 // Permite acesso a classe de conexão com o banco de dados
require_once("bd.class.php");

// Recebe dados do formulário de cadastro
$email =        $_POST["nEmailUpdate"];
$usuario =      $_POST["nUserUpdate"];
$senha =        md5($_POST["nNewSenhaUpdate"]);

// Instanciando Objeto da classe de conexão com o banco de dados
$objConnStart = new bd();
$objConnStartResult = $objConnStart->conn_db();

// Comandos SQL
$sqlSelect = "select email, usuario from usuarios where email = '$email' and usuario = '$usuario'";
$resourceSqlSelect = mysqli_query($objConnStartResult, $sqlSelect);
$sqlUpdate = "update usuarios set senha = '$senha' where email = '$email' and usuario = '$usuario'";

// Lógica de validação
if($resourceSqlSelect == true){
    $resourceSqlSelectArray = mysqli_fetch_array($resourceSqlSelect);
    if($resourceSqlSelectArray["email"] == $email && $resourceSqlSelectArray["usuario"] == $usuario){
        $resourceSqlUpdate = mysqli_query($objConnStartResult, $sqlUpdate);
        header("Location: index.php?statusUpdateSenha=1"); // Senha Atualizada com sucesso
    } else {
        header("Location: index.php?statusUpdateSenha=2"); // Os dados fornecidos são inválidos 
    }
} else {
    echo "Erro ao acessar o banco de dados: " . mysqli_error();
}

// Fecha a conexão com o banco de dados
mysqli_close($objConnStart);   
?>