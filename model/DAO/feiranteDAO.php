<?php

class FeiranteDAO
{
    public function __construct()
    {
        //Import da classe de conexão
        require_once('conexaoMysql.php');
        require_once('../model/feiranteClass.php');
        
        //Instancia do objeto de conexão
        $this->conexaoMysql = new Conexao();

        //Abre a conexão com a BD
        $this->conexao = $this->conexaoMysql->getConn();
    }

    public function Create(Feirante $feirante)
    {
        $sql = 'INSERT INTO feirante (cpf, nome, rg, tel1, tel2, email, cep, rua, numero, bairro, cidade, uf, complemento) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $insere = Conexao::getConn()->prepare($sql);
        $insere->bindValue(1, $feirante->getCPF());
        $insere->bindValue(2, $feirante->getNome());
        $insere->bindValue(3, $feirante->getRg());
        $insere->bindValue(4, $feirante->getTel1());
        $insere->bindValue(5, $feirante->getTel2());
        $insere->bindValue(6, $feirante->getEmail());
        $insere->bindValue(7, $feirante->getCep());
        $insere->bindValue(8, $feirante->getRua());
        $insere->bindValue(9, $feirante->getNumero());
        $insere->bindValue(10, $feirante->getBairro());
        $insere->bindValue(11, $feirante->getCidade());
        $insere->bindValue(12, $feirante->getUF());
        $insere->bindValue(13, $feirante->getComplemento());

        $insere->execute();

        if (isset($insere)) {
            echo "<script>alert('Cadastrado com Sucesso');window.location.href = '../index.php?pag=listFeirante';</script>";
            
            
        } else {
            echo "<script>alert('Erro no cadastro');window.location.href = '../index.php';</script>";
            // header('Location: index.php');
        }
    }

    public function Read()
    {
    }

    public function Update(Feirante $feirante)
    {
        $sql = 'UPDATE feirante SET cpf=?, nome=?, rg=?, tel1=?, tel2=?, email=?, cep=?, rua=?, numero=?, bairro=?, cidade=?, uf=?, complemento=? WHERE codFeirante=?';
        $update = Conexao::getConn()->prepare($sql);
        $update->bindValue(1, $feirante->getCPF());
        $update->bindValue(2, $feirante->getNome());
        $update->bindValue(3, $feirante->getRg());
        $update->bindValue(4, $feirante->getTel1());
        $update->bindValue(5, $feirante->getTel2());
        $update->bindValue(6, $feirante->getEmail());
        $update->bindValue(7, $feirante->getCep());
        $update->bindValue(8, $feirante->getRua());
        $update->bindValue(9, $feirante->getNumero());
        $update->bindValue(10, $feirante->getBairro());
        $update->bindValue(11, $feirante->getCidade());
        $update->bindValue(12, $feirante->getUF());
        $update->bindValue(13, $feirante->getComplemento());
        $update->bindValue(14, $feirante->getCodigo());
        $update->execute();
        

        if ($update->rowCount()) {
            echo "<script>alert('Alterado com Sucesso');window.location.href = '../index.php?pag=listFeirante';</script>";
            
            
        } else {
            echo "<script>alert('Erro na Atualização');window.location.href = '../index.php?pag=listFeirante';</script>";
            // header('Location: ../index.php');
            var_dump($update);
        }
    }
    

    public function Delete(Feirante $feirante)
    {
        $sql = 'DELETE FROM feirante WHERE codFeirante = ?';
        $delete = Conexao::getConn()->prepare($sql);
        $delete->bindValue(1, $feirante->getCodigo());
        $delete->execute();
        

        if ($delete->rowCount()) {
            echo "<script>alert('Registro excluído!!!');window.location.href = '../index.php?pag=listFeirante';</script>";
            
            
        } else {
            echo "<script>alert('Erro na Atualização');window.location.href = '../index.php?pag=listFeirante';</script>";
            // header('Location: ../index.php');
            
        }
    }
    
}
