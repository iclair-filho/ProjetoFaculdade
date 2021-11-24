<?php

    
    require "../model/DAO/atividadesDAO.php";
    require "../model/atividadesClass.php";
    
    
    $atividade = new Atividades;

    $atividade->setCodAtiv($_GET['cod']);
    $atividade->setDescricao($_POST['desc_atividade']);
    $atividade->setValor($_POST['valor_taxa']);
    
    $atividadeDAO = new AtividadesDAO;

    $atividadeDAO->Update($atividade);
            
            

?>