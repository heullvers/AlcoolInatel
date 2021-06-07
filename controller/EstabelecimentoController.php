<?php

include("../dao/EstabelecimentoDAO.php");

class EstabelecimentoController {

   private $estabelecimentoDAO;

   public function __construct(){
      $this->estabelecimentoDAO = new EstabelecimentoDAO();
   }

 public function inserirEstabelecimento($name, $cpf,
 $cidade, $cep, $endereco, $senha) {
    
   $retorno = $this->estabelecimentoDAO->inserir($name, $cpf,
   $cidade, $cep, $endereco, $senha);
   return $retorno;
}

public function login($usuario, $senha){
   $retorno = $this->estabelecimentoDAO->logar($usuario, $senha);
   return $retorno;
}

public function listarTodos(){
   $retorno = $this->estabelecimentoDAO->listar();
   return $retorno;
}


}

?>