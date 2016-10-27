<?php
class Aluno {

    private $id;
    private $cpf;
    private $rg;
    private $nome;
    private $matricula;
    private $nascimento;
    private $telefone;
    private $endereco;
    private $observacao;
    private $data_cadastro;

    public function __construct($cpf, $rg, $nome, $matricula, $nascimento, $telefone, $endereco) {
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->nascimento = $nascimento;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->observacao = "";
        $this->data_cadastro = date("Y-m-d H:i:s");
    }

    public function getId() {
        return $this->id;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function getRg() {
        return $this->rg;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getMatricula() {
        return $this->matricula;
    }
    public function getNascimento() {
        return $this->nascimento;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    public function getObservacao() {
        return $this->observacao;
    }
    public function getDataCadastro() {
        return $this->data_cadastro;
    }
}
?>