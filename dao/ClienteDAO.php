<?php

    require_once 'models/Cliente.php';

    class ClienteDAO{
        private $conn;

        public function __construct(){
            $servername = "localhost";
            $user = "root";
            $db = "alcool";
            $password = "";
            $this->conn = new mysqli($servername, $user, $password, $db);
        }

        public function listar(){
            
        }

        public function inserir($name, $cpf, $comorbidade,
        $cidade, $cep, $endereco, $senha){
            $permissao = "normal";

            $sql = "INSERT INTO `cliente` (`nome`, `cpf`, `comorbidade`, `cidade`, `cep`, 
            `endereco`, `senha`, `id`, `permissao`) VALUES ('$name', '$cpf', '$comorbidade', '$cidade', '$cep', '$endereco', '$senha', NULL, '$permissao') ";
            $result = mysqli_query($this->conn, $sql);

            return $result;
            
        }

        public function logar($usuario, $senha){
            $sql = "SELECT * FROM cliente WHERE cpf='$usuario' AND senha='$senha' ";
            $result = mysqli_query($this->conn, $sql);
            $row = mysqli_num_rows($result);
            return $row;
            
        }
        
    }

?>