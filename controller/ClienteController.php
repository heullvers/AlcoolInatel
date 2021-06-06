<?php
require_once '../models/Cliente.php';
require_once '../dao/ClienteDAO.php';

class ClienteController {

   private $cliente;
   private $clienteDAO;

   public function __construct(){
      $this->cliente = new Cliente();
      $this->clienteDAO = new ClienteDAO();
   }


 public function listarClientes() {
    $retorno = $this->clienteDAO->listar();
    return $retorno;
 }
}

?>