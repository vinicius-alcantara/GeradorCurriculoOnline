<?php
// Permite acesso a classe de conexão com o banco de dados
require_once("bd.class.php");

// Recebe dados do formulário de cadastro
$email = $_POST["nEmailDelete"];
$senha = md5($_POST["nSenhaDelete"]);

// Instanciando Objeto da classe de conexão com o banco de dados
$objConnStart = new bd();
$objConnStartResult = $objConnStart->conn_db();

// Comandos SQL
$sqlSelect = "select email, senha from usuarios where email = '$email' and senha = '$senha'";
$sqlDelete = "delete from usuarios where email = '$email' and senha = '$senha'";
$resourceSqlSelect = mysqli_query($objConnStartResult, $sqlSelect);

// Lógica de validação
if($resourceSqlSelect == true){
    $resourceSqlSelectArray = mysqli_fetch_array($resourceSqlSelect);
    if($resourceSqlSelectArray["email"] == $email && $resourceSqlSelectArray["senha"] == $senha){
        $resourceSqlDelete = mysqli_query($objConnStartResult, $sqlDelete);
        header("Location: index.php?statusDelete=1"); // 1 = Sucess
    } else {
        header("Location: index.php?statusDelete=2"); // 2 = Dados Inválidos
    }
} else {
    echo "Erro ao acessar o banco de dados: " . mysqli_error();
}

// Fecha a conexão com o banco de dados
mysqli_close($objConnStart);
?>