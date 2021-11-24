<?php


class Atividades{
    private $codAtiv;
    private $descricao;
    private $valor;

	
 
    //getters e setters

    public function getAtiv(){
        return $this->codAtiv;
    }

    public function setCodAtiv($codAtiv){
        $this->codAtiv = $codAtiv;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }
}
?>