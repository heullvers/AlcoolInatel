<?php 
    
    include("controller/ClienteController.php");
    
    $controller = new ClienteController();

    if(isset($_POST["select"])){
        $cidade = $_POST["inputcidade"];
        $cep = $_POST["inputcep"];
        $endereco = $_POST["inputendereco"];
        $senha = $_POST["password"];

        if($_POST["select"] == "cliente"){

            $name = $_POST["inputnome"];
            $cpf = $_POST["inputcpf"];
            $comorbidade = $_POST["inputcomorbidade"];
            $controller->inserirCliente($name, $cpf, $comorbidade,
                $cidade, $cep, $endereco, $senha);
            
            session_start();
            $_SESSION['message'] = 'Cadastro realizado com sucesso!';
        
            header("location: view/signup.php");
        }
        else{ //estabelecimento
            $name = $_POST["inputnomeempresa"];
            $cnpj = $_POST["inputcnpj"];

            //createEstabelecimento($conn, $name, $cnpj, $cidade, $cep, $endereco, $senha);

            header("location: view/dashboard.html");
        }
    }


?>