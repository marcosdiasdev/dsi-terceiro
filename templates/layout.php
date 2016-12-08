<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$this->e($titulo)?></title>

    <link href="<?=HOME?>/assets/bootstrap/css/app.css" rel="stylesheet">
    <link href="<?=HOME?>/assets/font-awesome/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="<?=HOME?>/assets/css/style.css" rel="stylesheet">
</head>
<body id="app-layout">
    <nav id="top-navbar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="<?=HOME?>">Terceiro</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <!-- Esquerda da Barra de Navegação -->
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Aluno<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=HOME?>/aluno">Listar</a></li>
                            <li><a href="<?=HOME?>/aluno/cadastrar">Cadastrar</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Direita da Barra de Navegação -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Links de Autenticação -->
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Cadastro</a></li>
                </ul>
                
            </div>
        </div>
    </nav>

    <!-- Define onde será carregado o conteúdo neste layout -->
    <?=$this->section('content')?>

    <script src="assets/jquery/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>
