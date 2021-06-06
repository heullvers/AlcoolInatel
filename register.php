<?php 

    if(isset($_POST["select"])){
        $cidade = $_POST["inputcidade"];
        $cep = $_POST["inputcep"];
        $endereco = $_POST["inputendereco"];
        $senha = $_POST["input"];

        if($_POST["select"] == "cliente"){

            $name = $_POST["inputnome"];
            $cpf = $_POST["inputcpf"];
            $comorbidade = $_POST["inputcomorbidade"];


            header("location: view/dashboard.html");
        }
        else{ //estabelecimento
            $name = $_POST["inputnomeempresa"];
            $cnpj = $_POST["inputcnpj"];

            //createEstabelecimento($conn, $name, $cnpj, $cidade, $cep, $endereco, $senha);

            header("location: view/dashboard.html");
        }
    }


?>