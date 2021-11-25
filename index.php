<?php
include 'view/includes/header.php';
?>
<section class="home-section">
    <div class="text">Prefeitura Municipal de Modelândia</div>

    <?php
    if (isset($_GET['pag'])) {

        switch ($_GET['pag']) {
            case "feirante":
                include "view/cadFeirante.php";
                break;
            case "listFeirante":
                include "view/listFeirante.php";
                break;

            case "fiscal":
                include "view/cadFiscal.php";
                break;
            case "usuario":
                include "view/cadUsuario.php";
                break;
            case "atividade":
                include "view/cadAtividades.php";
                break;
            case "financeiro":
                include "view/cadFinanceiro.php";
                break;
            case "modelo":
                include "view/cadModelo.php";
                break;
            default:
                break;
        }
        include "view/modal/modal.php";
    }

    ?>



    <?php include_once('view/includes/footer.php'); ?>