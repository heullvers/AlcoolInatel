<?php

    include("controller/ClienteController.php");
        
    $controller = new ClienteController();

    $usuario = $_POST["inputcpf"];
    $senha = $_POST["password"];

    if(isset($usuario) and isset($senha)){
        $retorno = $controller->login($usuario, $senha);
        if($retorno){
            header("location: view/dashboard.html");
        }
        else{
            
            session_start();
            $_SESSION['messageLogin'] = 'Credenciais inválidas';
            header("location: view/signin.php");

        }
    }


?>