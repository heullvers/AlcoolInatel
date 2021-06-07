<?php

    include("controller/ClienteController.php");
    include("controller/EstabelecimentoController.php");
        
    
    
    if(isset($_POST["select"])){
        $senha = $_POST["password"];
        if($_POST["select"] == "cliente"){
            $controller = new ClienteController();
            $usuario = $_POST["inputcpf"];

            if(isset($usuario) and isset($senha)){

                $retorno = $controller->login($usuario, $senha);
                if($retorno){
                    header("location: view/dashboard.php");
                }
                else{
                    
                    session_start();
                    $_SESSION['messageLogin'] = 'Credenciais inválidas';
                    header("location: view/signin.php");

                }
            }
        }
        else{ //Estabelecimento

            $controller = new EstabelecimentoController();
            $usuario = $_POST["inputcnpj"];
            
            if(isset($usuario) and isset($senha)){

                $retorno = $controller->login($usuario, $senha);
                if($retorno){
                    header("location: view/dashboard.php");
                }
                else{
                    
                    session_start();
                    $_SESSION['messageLogin'] = 'Credenciais inválidas';
                    header("location: view/signin.php");

                }
            }



        }
    }


?>