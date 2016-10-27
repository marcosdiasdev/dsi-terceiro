<?php
abstract class Banco {

    private $dsn = "mysql:host=localhost;dbname=terceiro";
    private $usuario = "root";
    private $senha = "";

    public static function getInstance() {
        $con = new PDO($dsn, $usuario, $senha);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $con->exec("SET CHARACTER SET utf8");
        return $con;
    }
}
?>