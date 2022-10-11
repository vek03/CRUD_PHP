<?php
//import da classe banco
require_once("banco.php");

class Cadastro extends Banco {

    //Declaração das Variáveis
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //Metodos Set
    public function setId($string){
        $this->id = $string;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setSenha($string){
        $this->senha = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setBairro($string){
        $this->bairro = $string;
    }
    public function setCep($string){
        $this->cep = $string;
    }
    public function setCidade($string){
        $this->cidade = $string;
    }
    public function setEstado($string){
        $this->estado = $string;
    }

    //Metodos Get
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getEstado(){
        return $this->estado;
    }

    //função que manda os valores para o metodo setCadastros
    public function incluir(){
        return $this->setCadastros($this->getNome(),$this->getEmail(),$this->getSenha(),$this->getEndereco(),$this->getBairro(),$this->getCep(),$this->getCidade(),$this->getEstado());
    }

    public function listar($id){
        return $this->getCadastros($id);
    }

    public function editar(){
        return $this->updateCadastros($this->getId(),$this->getNome(),$this->getEmail(),$this->getSenha(),$this->getEndereco(),$this->getBairro(),$this->getCep(),$this->getCidade(),$this->getEstado());
    }

    public function excluir($id){
        return $this->deleteCadastros($id);
    }
}
?>
