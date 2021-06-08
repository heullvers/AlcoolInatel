<?php

    include("../controller/EstabelecimentoController.php");
    $controller = new EstabelecimentoController();
    $retorno = $controller->listarTodos();
    
?>

<link rel="stylesheet" href="../assets/css/styles-dashboard.css">
        <link rel="stylesheet" href="../assets/css/styles-view.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<div class="container">
    <div class="box">
        <form id="formulario" method="POST" action="requisicao.php">
            <input type="hidden" id="valorinv" name="valorinv">
        </form>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Endereço</th>
                    <th>Permissão</th>
                    <th>Ativo</th>
                </thead>
                <tbody>
                    <?php while($dado = $retorno->fetch_array()){ ?>
                    <tr>
                        <td data-label="ID"><?php echo $dado["id"] ?></td>
                        <td data-label="Nome"><?php echo $dado["nome"] ?></td>
                        <td data-label="CNPJ"><?php echo $dado["cnpj"] ?></td>
                        <td data-label="Cidade"><?php echo $dado["cidade"] ?></td>
                        <td data-label="CEP"><?php echo $dado["cep"] ?></td>
                        <td data-label="Endereço"><?php echo $dado["endereco"] ?></td>
                        <td data-label="Permissão"><?php echo $dado["permissao"] ?></td>
                        
                        <td id="ativacao" onclick="funcaozinha(<?php echo $dado['id'] ?>)" data-label="Ativo" class="button-manip" id="permission"> 
                            <?php 
                            if(!$dado["flag"]){
                                ?> <i class='bx bxs-user laranja'></i> <?php
                            }
                            else{
                                ?> <i class='bx bxs-user verde'></i> <?php
                            }
                            
                            
                            ?> 
                        </td>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</div>


<script src="../assets/js/jquery-3.6.0.js"></script>
<script>
    /*
    $( "#ativacao" ).submit(function( event ) {
        
    });
    */

    function funcaozinha(event){
        if(confirm("Deseja alterar o estado?")){
            $('#valorinv').attr('value', event);

            $( "#formulario" ).submit();

            //window.location.href="dashboard.php?tela=ve";
        }
    }
</script>
