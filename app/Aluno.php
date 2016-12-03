<?php
namespace App;

class Aluno {

    // Atributos
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

    // Construtor
    public function __construct() { }

    // Getters
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

    // Setters
    public function setId($id) {
        $this->id = $id;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function setRg($rg) {
        $this->rg = $rg;
    }    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    public function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function setObservacao($observacao) {
        $this->observacao = $observacao;
    }
    public function setDataCadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }    
}
?>