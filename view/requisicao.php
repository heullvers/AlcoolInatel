<?php

    include("../controller/EstabelecimentoController.php");
    $controller = new EstabelecimentoController();
    $retorno = $controller->ativar($_POST['valorinv']);

    header("location: dashboard.php?tela=ve");

?>