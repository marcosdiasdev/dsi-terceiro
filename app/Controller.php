<?php
namespace App;


class Controller
{
    function limparCampo($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    static function limparRequisicao($req) {
        $requisicao = array();
        foreach ($req as $chave => $valor) {
            $valor = self::limparCampo($valor);
            $requisicao[$chave] = $valor;
        }
        return $requisicao;
    }
}