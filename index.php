<?php
    header("Content-type: text/html; charset=utf-8"); 

    // Carregamento do autoload e do arquivo de configurações
    require __DIR__.'/vendor/autoload.php';
    require __DIR__.'/config.php';

    // Instanciação do AltoRouter
    $router = new AltoRouter();
    $router->setBasePath('/dsi-terceiro');

    // Mapeamento de rotas
    $router->map('GET', '/', '\App\HomeController#index', 'home');
    $router->map('GET', '/aluno', '\App\AlunoController#listarTodos', 'alunos');
    $router->map('GET', '/aluno/[*:id]/*', '\App\AlunoController#listar', 'aluno');

    // Verificação e tratamento de correspondência de rotas
    $match = $router->match();
    if ($match === false) 
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Não Encontrado', true, 404);
    }
    else
    {
        list($controlador, $metodo) = explode( '#', $match['target'] );

        if ( is_callable(array($controlador, $metodo)) ) 
        {
            $obj = new $controlador();
            call_user_func_array(array($obj,$metodo), array($match['params']));
        }
        else 
        {
            header($_SERVER['SERVER_PROTOCOL'] . ' 505 Erro Interno', true, 505);
        }
    }
?>