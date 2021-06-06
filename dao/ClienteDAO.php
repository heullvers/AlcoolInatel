<?php

    require_once '../models/Cliente.php';

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
            
            $retorno = array();

            $sql = "SELECT * FROM cliente ";
            $result = mysqli_query($this->conn, $sql);


            while($row_cliente = mysqli_fetch_assoc($result)){
                echo $row_cliente['id'];
            }
            /*
            while($row = $result->mysqli_query($this->conn, $sql)){
                $retorno = $row;
            }
            */

            return $retorno;
            
        }
        
    }

?>