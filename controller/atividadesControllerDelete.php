<?php

    
    require "../model/DAO/atividadesDAO.php";
    require "../model/atividadesClass.php";
    
    
    $atividade = new Atividades;

    $atividade->setCodAtiv($_GET['cod']);
        
    $atividadeDAO = new AtividadesDAO;
    $atividadeDAO->Delete($atividade);
            
            

?>