<?php
namespace App;
use PDO;

class AlunoDAO {
    
    private $con;

    public function __construct() {
        $this->con = Banco::getConexao();
    }

    public function listar($id) {
        try {
            $resultado = $this->con->prepare("SELECT * FROM aluno WHERE idaluno = :id");
            $resultado->bindValue(':id', $id);
            $resultado->execute();
            return $this->processarResultado($resultado);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function listarTodos() {
        try {
            $resultado = $this->con->query("SELECT * FROM aluno");
            return $this->processarResultado($resultado);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function inserir(Aluno $aluno) {
        try {

            $resultado = $this->con->prepare("
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
            throw $e;
        }
    }

    public function atualizar(Aluno $aluno) {
        try {
            $resultado = $this->con->prepare("
            UPDATE aluno SET cpf = :cpf, rg = :rg, nome = :nome, matricula = :matricula, 
                nascimento = :nascimento, telefone = :telefone, endereco = :endereco, observacao = :observacao, data_cadastro = :data_cadastro WHERE idaluno = :id");

            $resultado->bindValue(':id', $aluno->getId());
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

    public function apagar(Aluno $aluno) {
        try {
            $resultado = $this->con->prepare("DELETE FROM aluno WHERE idaluno = :id");
            $resultado->bindValue(':id', $aluno->getId());
            $resultado->execute();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    private function processarResultado($rs) {
        $resultado = array();
 
        if($rs) {
            while($linha = $rs->fetch(PDO::FETCH_OBJ)) {
                $aluno = new Aluno();
 
                $aluno->setId($linha->idaluno);
                $aluno->setCpf($linha->cpf);
                $aluno->setRg($linha->rg);
                $aluno->setNome($linha->nome);
                $aluno->setMatricula($linha->matricula);
                $aluno->setNascimento($linha->nascimento);
                $aluno->setTelefone($linha->telefone);
                $aluno->setEndereco($linha->endereco);
                $aluno->setObservacao($linha->observacao);
                $aluno->setDataCadastro($linha->data_cadastro);
 
                $resultado[] = $aluno;
            }
        }
        return $resultado;
    }
}
?>