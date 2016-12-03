<?php
namespace App;

/*
 * AlunoController
 * Classe responsável por mediar requisições entre a View e o Model
 */
class AlunoController {

    public function listarTodos() {
        $alunoDAO = new AlunoDAO();
        $alunos = $alunoDAO->listarTodos();
        View::render('aluno', ['descricao' => 'Aluno', 'alunos' => $alunos]);
    }

    public function listar($params = array()) {
        $alunoDAO = new AlunoDAO();
        $aluno = $alunoDAO->listar($params['id']);
        View::render('aluno', ['descricao' => 'Aluno', 'alunos' => $aluno]);      
    }
}
?>