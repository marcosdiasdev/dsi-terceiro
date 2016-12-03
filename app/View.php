<?php
namespace App;

/*
 * View
 * Classe responsável por apresentar uma determinada 'view' com o uso do Plates
 */
class View {

    static function render($nome, $args = array()) {
        $templates = new \League\Plates\Engine(ABSPATH.'/templates');
        echo $templates->render($nome, $args);
    }
}
?>