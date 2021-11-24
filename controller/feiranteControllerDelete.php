<?php

    
    require "../model/DAO/feiranteDAO.php";
    require "../model/feiranteClass.php";
    
    
    $feirante = new Feirante;
    $feirante->setCodigo($_GET['cod']);
    



    $feiranteDAO = new feiranteDAO;

    $feiranteDAO->Delete($feirante);
    

?>