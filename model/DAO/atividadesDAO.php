<?php

class AtividadesDAO
{
    public function __construct()
    {
        //Import da classe de conexão
        require_once('conexaoMysql.php');
        require_once('../model/atividadesClass.php');

        //Instancia do objeto de conexão
        $this->conexaoMysql = new Conexao();

        //Abre a conexão com a BD
        $this->conexao = $this->conexaoMysql->getConn();
    }

    public function Create(Atividades $atividades)
    {
        $sql = 'INSERT INTO atividade (descricao, valor) VALUES (?,?)';
        $insere = Conexao::getConn()->prepare($sql);
        $insere->bindValue(1, $atividades->getDescricao());
        $insere->bindValue(2, $atividades->getValor());


        $insere->execute();

        if (isset($insere)) {

            echo "<script>alert('Cadastrado com Sucesso');window.location.href = '../index.php?pag=atividade';</script>";
        } else {
            echo "<script>alert('Erro no cadastro');window.location.href = './index.php?pag=atividade';</script>";
            //         // header('Location: index.php');
        }
    }

    public function ReadAll()
    {
    }

    public function Update(Atividades $atividades)
    {
        $sql = 'UPDATE atividade SET descricao=?, valor=? WHERE codAtiv=?';
        $update = Conexao::getConn()->prepare($sql);
        $update->bindValue(1, $atividades->getDescricao());
        $update->bindValue(2, $atividades->getValor());
        $update->bindValue(3, $atividades->getAtiv());

        $update->execute();

        if ($update->rowCount()) {
            echo "<script>alert('Atualizado com Sucesso');window.location.href = '../index.php?pag=atividade';</script>";
        } else {
            echo "<script>alert('Erro no cadastro');window.location.href = '../index.php?pag=atividade';</script>";
            header('Location: index.php');
        }
    }

    public function Delete(Atividades $atividades)
    {
        $sql = 'DELETE FROM atividade WHERE codAtiv=?';
        $delete = Conexao::getConn()->prepare($sql);
        $delete->bindValue(1, $atividades->getAtiv());

        $delete->execute();

        if ($delete->rowCount()) {
            echo "<script>alert('Exluído com Sucesso!!');window.location.href = '../index.php?pag=atividade';</script>";
        } else {
            echo "<script>alert('Erro na Exclusão');window.location.href = '../index.php?pag=atividade';</script>";
            header('Location: index.php');
        }
    }
}
