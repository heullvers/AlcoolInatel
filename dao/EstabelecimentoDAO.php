<?php

    require_once 'models/Estabelecimento.php';

    class EstabelecimentoDAO{
        private $conn;

        public function __construct(){
            $servername = "localhost";
            $user = "root";
            $db = "alcool";
            $password = "";
            $this->conn = new mysqli($servername, $user, $password, $db);
        }


        public function inserir($name, $cnpj,
        $cidade, $cep, $endereco, $senha){
            $permissao = 'normal';
            $flag = 0;
            $sql = "INSERT INTO `estabelecimento` (`id`, `nome`, `cnpj`, `cidade`, `cep`, `endereco`, `senha`, `permissao`, `flag`) VALUES (NULL, '$name', '$cnpj', '$cidade', '$cep', '$endereco', '$senha', '$permissao', '$flag')";
            $result = mysqli_query($this->conn, $sql);

            return $result;
            
        }

        public function logar($usuario, $senha){
            $sql = "SELECT * FROM estabelecimento WHERE cnpj='$usuario' AND senha='$senha' ";
            $result = mysqli_query($this->conn, $sql);
            $row = mysqli_num_rows($result);
            return $row;
            
        }
        
    }

?>