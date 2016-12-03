<?php
namespace App;
use PDO;

class Banco {

    private static $instance = null;

    protected function __construct() 
    { 
    }

    public static function getConexao() {

        if(self::$instance === null) {
            try {
                self::$instance = new PDO("mysql:host=".HOSTNAME.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->exec("SET CHARACTER SET utf8");
            }
            catch(PDOException $e) {
                throw $e;
            }
        }
        return self::$instance;
    }
}
?>