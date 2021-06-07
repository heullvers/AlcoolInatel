<?php 
    
    include("controller/ClienteController.php");
    include("controller/EstabelecimentoController.php");
    
    

    if(isset($_POST["select"])){
        $cidade = $_POST["inputcidade"];
        $cep = $_POST["inputcep"];
        $endereco = $_POST["inputendereco"];
        $senha = $_POST["password"];

        if($_POST["select"] == "cliente"){

            $name = $_POST["inputnome"];
            $cpf = $_POST["inputcpf"];
            $comorbidade = $_POST["inputcomorbidade"];
            $controller = new ClienteController();
            $controller->inserirCliente($name, $cpf, $comorbidade,
                $cidade, $cep, $endereco, $senha);
            
            session_start();
            $_SESSION['message'] = 'Cadastro realizado com sucesso!';
        
            header("location: view/signup.php");
        }
        else{ //estabelecimento
            $name = $_POST["inputnomeempresa"];
            $cnpj = $_POST["inputcnpj"];

            $controller = new EstabelecimentoController();
            $controller->inserirEstabelecimento($name, $cnpj,
                $cidade, $cep, $endereco, $senha);
            
            session_start();
            $_SESSION['messageEmpresa'] = 'O cadastro da sua empresa foi realizado com sucesso!';
        
            header("location: view/signup.php");

        }
    }


?>