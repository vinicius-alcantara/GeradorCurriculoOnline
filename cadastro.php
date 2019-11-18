<?php
// Permite acesso a classe de conexão com o banco de dados
require_once("bd.class.php");

// Recebe dados do formulário de cadastro
$nome = $_GET["nNomeCad"];
$email = $_GET["nEmailCad"];
$usuario = $_GET["nUserCad"];
$senha = md5($_GET["nSenhaCad"]);

// Instanciando Objeto da classe de conexão com o banco de dados
$objConnStart = new bd();
$objConnStartResult = $objConnStart->conn_db();

// Comandos SQL
$sqlInsert = "insert into usuarios (nome, email, usuario, senha) values ('$nome', '$email', '$usuario', '$senha')";
$sqlSelect = "select email, usuario from usuarios where email = '$email' or usuario = '$usuario'";
$resourceSqlSelect = mysqli_query($objConnStartResult, $sqlSelect);

// Lógica de validação
if($resourceSqlSelect == true){
    $resourceSqlSelectArray = mysqli_fetch_array($resourceSqlSelect);
    if($resourceSqlSelectArray["email"] == $email || $resourceSqlSelectArray["usuario"] == $usuario){
        header("Location: index.php?statusCad=1");
    } else {
        $resourceSqlInsert = mysqli_query($objConnStartResult, $sqlInsert);
        header("Location: index.php?statusCad=2");
    }
} else {
    echo "Erro ao acessar o banco de dados!" . mysqli_error();
}

// Fecha a conexão com o banco de dados
mysqli_close($objConnStart);
?>