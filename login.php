<?php
// Permite acesso a classe de conexão com o banco de dados
require_once("bd.class.php");

// Recebe dados do formulário de cadastro
$usuario = $_POST["nUserLogin"];
$senha = md5($_POST["nSenhaLogin"]);

// Instanciando Objeto da classe de conexão com o banco de dados
$objConnStart = new bd();
$objConnStartResult = $objConnStart->conn_db();

// Comandos SQL
$sqlSelect = "select usuario, senha from usuarios where usuario = '$usuario' and senha = '$senha'";
$resourceSqlSelect = mysqli_query($objConnStartResult, $sqlSelect);

// Lógica de validação
if($resourceSqlSelect == true){
    $resourceSqlSelectArray = mysqli_fetch_array($resourceSqlSelect);
    if($resourceSqlSelectArray["usuario"] == $usuario && $resourceSqlSelectArray["senha"] == $senha){
        header("Location: home.php");
    } else {
        header("Location: index.php?statusLogin=1");
    }
} else {
    echo "Erro ao acessar o banco de dados: " . mysqli_error();
}

// Fecha a conexão com o banco de dados
mysqli_close($objConnStart);
?>

