<?php
class Logradouro{
    private $cep;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $uf;
    private $complemento;

    //getters e setters
    public function getCEP(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getRua(){
        return $this->rua;
    }
    public function setRua($rua){
        $this->rua = $rua;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getUF(){
        return $this->uf;
    }
    public function setUF($uf){
        $this->uf = $uf;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }
}