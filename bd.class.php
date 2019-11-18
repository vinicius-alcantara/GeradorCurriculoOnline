<?php

class bd {
    private $host = "localhost";
    private $user = "curriculo";
    private $password = "h4ck3rSA@181915";
    private $database = "curriculo";

    public function conn_db(){
        $link = mysqli_connect($this->host, $this->user, $this->password, $this->database) or die("Erro ao conectar ao banco de dados: " . mysqli_error());
        $link->set_charset("utf8");
        return $link;
    }
}
?>