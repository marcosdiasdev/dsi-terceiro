<meta charset="utf-8">
<?php

    include_once 'AlunoDAO.php';
   
    $aluno = new Aluno("65412378988","123456789112","Chuck Norris",
            "20160507081", "1958-01-01", "551188990011", "Times Square");

    $alunoDAO = new AlunoDAO();
    $alunoDAO->inserir($aluno);
    
    $alunos = AlunoDAO::listar();

    foreach($alunos as $aluno) {
        echo $aluno->nome . "<br>";
    }

?>