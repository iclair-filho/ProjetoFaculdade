<?php

    
    require "../model/DAO/feiranteDAO.php";
    require "../model/feiranteClass.php";
    
    
    $feirante = new Feirante;

    
    $feirante->setCPF($_POST['cpf']);
    $feirante->setNome($_POST['nome']);
    $feirante->setRg($_POST['rg']);
    $feirante->setTel1($_POST['telefone1']);
    $feirante->setTel2($_POST['telefone2']);
    $feirante->setEmail($_POST['email']);
    $feirante->setCep($_POST['cep']);
    $feirante->setRua($_POST['rua']);
    $feirante->setNumero($_POST['numero']);
    $feirante->setBairro($_POST['bairro']);
    $feirante->setCidade($_POST['cidade']);
    $feirante->setUF($_POST['uf']);
    $feirante->setComplemento($_POST['complemento']);
    $feirante->setStatus($_POST['status']);



    $feiranteDAO = new feiranteDAO;

    $feiranteDAO->Create($feirante);
            

?>