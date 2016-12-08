<?php
namespace App;


class Model
{
    function __construct($campos = array()) {
        foreach ($campos as $chave => $valor)
        {
            $this->$chave = $valor;
        }
    }
}