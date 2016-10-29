<?php
abstract class Banco {

    private static $dsn = "mysql:host=localhost;dbname=terceiro";
    private static $usuario = "root";
    private static $senha = "";

    public static function getInstance() {
        $con = new PDO(self::$dsn, self::$usuario, self::$senha);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $con->exec("SET CHARACTER SET utf8");
        return $con;
    }
}
?>