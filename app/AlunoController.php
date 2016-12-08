<?php
namespace App;

/*
 * AlunoController
 * Classe responsável por mediar requisições entre a View e o Model
 */
class AlunoController extends Controller {

    public function listarTodos() {
        $alunoDAO = new AlunoDAO();
        $alunos = $alunoDAO->listarTodos();
        View::render('aluno', ['descricao' => 'Aluno', 'alunos' => $alunos]);
    }

    public function listar($params) {
        $alunoDAO = new AlunoDAO();
        $aluno = $alunoDAO->listar($params['id']);
        View::render('aluno', ['descricao' => 'Aluno', 'alunos' => $aluno]);
    }

    public function cadastrar() {
        View::render('aluno.cadastrar', ['descricao' => 'Cadastrar aluno']);
    }

    public function inserir($params, $req) {

        $aluno = new Aluno($req);
        var_dump($aluno);
        die;

        $aluno->setDataCadastro(date("Y-m-d H:i:s"));

        $alunoDAO = new AlunoDAO();

        $aluno = $alunoDAO->inserir($aluno);
        View::render('aluno', ['descricao' => 'Aluno', 'alunos' => $aluno]);
    }
}
?>