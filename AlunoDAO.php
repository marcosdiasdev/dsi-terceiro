<?php
require_once 'Banco.php';
require_once 'Aluno.php';

class AlunoDAO {

    static public function listar() {
        $con = Banco::getInstance();
        try {
            $resultado = $con->query("SELECT * FROM aluno");
        } catch(Exception $e) {
            echo $e->getMessage();
        }

        $alunos = Array();
        if($resultado->rowCount() > 0){
            while($linha = $resultado->fetch(PDO::FETCH_OBJ)){
                array_push($alunos, $linha);                
            }
            
        }
        return $alunos;
    }

    public function inserir(Aluno $aluno) {
        try {
            $con = Banco::getInstance();

            $resultado = $con->prepare("
            INSERT INTO aluno(cpf, rg, nome, matricula, 
                nascimento, telefone, endereco, observacao, data_cadastro) 
            VALUES(:cpf, :rg, :nome, :matricula, 
                :nascimento, :telefone, :endereco, :observacao, :data_cadastro)");

            $resultado->bindValue(':cpf', $aluno->getCpf());
            $resultado->bindValue(':rg', $aluno->getRg());
            $resultado->bindValue(':nome', $aluno->getNome());
            $resultado->bindValue(':matricula', $aluno->getMatricula());
            $resultado->bindValue(':nascimento', $aluno->getNascimento());
            $resultado->bindValue(':telefone', $aluno->getTelefone());
            $resultado->bindValue(':endereco', $aluno->getEndereco());
            $resultado->bindValue(':observacao', $aluno->getObservacao());
            $resultado->bindValue(':data_cadastro', $aluno->getDataCadastro());
            
            $resultado->execute();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
}
?>