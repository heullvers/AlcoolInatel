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
                <th>Editar</th>
                <th>Remover</th>
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
                    <td data-label="Ativo">
                        <?php echo $dado["flag"] ?>
                    </td>
                    <td data-label="Editar" class="button-manip"><i class='bx bxs-edit-alt'></i></td>
                    <td data-label="Remover" class="button-manip"><i class='bx bxs-trash' ></i></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>