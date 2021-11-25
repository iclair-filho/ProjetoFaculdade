<?php

require_once 'logradouros.php';

class Feirante extends Logradouro{
    private $codFeirante;
    private $cpf;
    private $nome;
    private $rg;
    private $tel1;
    private $tel2;
    private $email;
    private $status;

	
       
    //Contrutor
    public function __construct()
    {
        
    }
    //getters e setters

    public function getCodigo(){
        return $this->codFeirante;
    }

    public function setCodigo($codFeirante){
        $this->codFeirante = $codFeirante;
    }

    public function getCPF(){
        return $this->cpf;
    }

    public function setCPF($cpf){
        $this->cpf = $cpf;  
    }
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome= $nome;
    }
    public function getRg(){
        return $this->rg;
    }
    public function setRg($rg){
        $this->rg = $rg;
    }
    public function getTel1(){
        return $this->tel1;
    }
    public function setTel1($tel1){
        $this->tel1 = $tel1;
    }
    public function getTel2(){
        return $this->tel2;
    }
    public function setTel2($tel2){
        $this->tel2 = $tel2;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
}
?>