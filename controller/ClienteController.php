<?php

include("dao/ClienteDAO.php");

class ClienteController {

   private $cliente;
   private $clienteDAO;

   public function __construct(){
      $this->clienteDAO = new ClienteDAO();
   }


 public function listarClientes() {
    $retorno = $this->clienteDAO->listar();
    return $retorno;
 }

 public function inserirCliente($name, $cpf, $comorbidade,
 $cidade, $cep, $endereco, $senha) {
    
   $retorno = $this->clienteDAO->inserir($name, $cpf, $comorbidade,
   $cidade, $cep, $endereco, $senha);
}

public function login($usuario, $senha){
   $retorno = $this->clienteDAO->logar($usuario, $senha);
   return $retorno;
}


}

?>