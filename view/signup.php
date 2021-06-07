<?php

    session_start();
    $messageCadastro = "";
    if(isset($_SESSION['message'])){
        $messageCadastro = $_SESSION['message'];
        unset($_SESSION['message']);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro | Álcool+</title>
        <link rel="stylesheet" href="../assets/css/styles-register.css">
        <script src="../assets/js/jquery-3.6.0.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="title">Cadastrar</div>
            <form method="POST" name="form" action="../register.php">
                <div class="option-register">
                    <span class="details">Você é um?</span>
                    <select name="select" class="select-register" id="select-reg">
                        <option value="cliente" selected>Cliente</option>
                        <option value="estabelecimento">Estabelecimento</option>
                    </select>
                </div>
                <div class="user-details" id="user-details">
                    <div class="input-box">
                        <span class="details">Nome</span>
                        <input type="text" placeholder="Digite seu nome" name="inputnome">
                        <span class="validate-message validate-message-nome" id="val-nome"></span>
                    </div>   
                    <div class="input-box" id="input-cpf">
                        <span class="details">CPF</span>
                        <input type="text" placeholder="Digite seu CPF" name="inputcpf">
                        <span class="validate-message validate-message-cpf" id="val-mes"></span>
                    </div> 
                    <div class="input-box">
                        <span class="details">Possui quantas comorbidades?</span>
                        <input type="number" placeholder="Digite o valor" name="inputcomorbidade">
                        <span class="validate-message validate-message-comorbidade" id="comorbidade"></span>
                    </div>
                </div>
                <div class="user-details" id="estabelecimento-details">

                    <div class="input-box">
                        <span class="details">Nome da empresa</span>
                        <input type="text" placeholder="Digite o nome da empresa" name="inputnomeempresa">
                        <span class="validate-message validate-message-nome-empresa" id="val-nome-empresa"></span>
                    </div>

                    <div class="input-box">
                        <span class="details">CNPJ</span>
                        <input type="text" placeholder="Digite seu CNPJ" name="inputcnpj">
                        <span class="validate-message validate-message-cnpj" id="val-cnpj"></span>
                    </div>
                </div>

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Cidade</span>
                        <input type="text" placeholder="Digite sua cidade" name="inputcidade">
                        <span class="validate-message validate-message-cid" id="val-end-cid"></span>
                    </div>  
                

                
                    <div class="input-box" >
                        <span class="details">CEP</span>
                        <input type="text" placeholder="Digite seu CEP" name="inputcep">
                        <span class="validate-message validate-message-cep" id="val-cep"></span>
                    </div>  
                
                
                
                    <div class="input-box">
                        <span class="details">Endereço</span>
                        <input type="text" placeholder="Rua/Avenida, número, bairro" name="inputendereco">
                        <span class="validate-message validate-message-cpf" id="val-end"></span>
                    </div>  
                
                
                    <div class="input-box">
                        <span class="details">Senha</span>
                        <input type="password" placeholder="Digite sua senha" name="password">
                        <span class="validate-message validate-message-password" id="val-pass"></span>
                    </div>
                

                
                    <div class="input-box">
                        <span class="details">Confirmar senha</span>
                        <input type="password" placeholder="Digite sua senha" name="confirmPassword">
                        <span class="validate-message validate-message-password-conf" id="val-pass-conf"></span>
                    </div>
                </div>
                
                <div class="button">
                    <input type="submit" value="Cadastrar" onclick="return validar()">
                </div>
                <div class="cadastrado">
                    <?php if($messageCadastro) { ?>
                        <p>Cadastrado realizado com sucesso!</p> <?php } ?>
                </div>
                
                <a href="signin.html">Já possui uma conta?</a>
            </form>
        </div>
        <script>
            function validar(){
               
               var cidade = form.inputcidade.value;
               var cep = form.inputcep.value;
               var endereco = form.inputendereco.value;
               var senha = form.password.value;
               var confirmSenha = form.confirmPassword.value;

               var selectR = $( "#select-reg option:selected" ).text();

               if(selectR == "Cliente"){

                    var cpf = form.inputcpf.value;
                    var nome = form.inputnome.value;
                    var comorbidadeValue = form.inputcomorbidade.value;
                    if(cpf == ""){ 
                        form.inputcpf.focus();
                        $('#val-mes').html("Campo obrigatório");
                        $('#val-mes').show();
                    }
                    else if(cpf.length != 11){
                            form.inputcpf.focus();
                            $('#val-mes').html("O CPF precisa ter 11 dígitos");
                            $('#val-mes').show();
                    }
                    else{
                        $('#val-mes').html("");
                        $('#val-mes').hide();
                        }
                    
                    if(nome == ""){ 
                        form.inputnome.focus();
                        $('#val-nome').html("Campo obrigatório");
                        $('#val-nome').show();
                    }
                    else{
                        form.inputnome.focus();
                        $('#val-nome').html("");
                        $('#val-nome').hide();
                    }

                    if(comorbidadeValue == ""){ 
                        form.inputcomorbidade.focus();
                        $('#comorbidade').html("Campo obrigatório");
                        $('#comorbidade').show();
                    }
                    else{
                        form.inputcomorbidade.focus();
                        $('#comorbidade').html("");
                        $('#comorbidade').hide();
                    }
                }

                else{ //Estabelecimento
                    var cnpj = form.inputcnpj.value;
                    var nomeEmpresa = form.inputnomeempresa.value;
                    if(cnpj == ""){ //CNPJ
                        form.inputcnpj.focus();
                        $('#val-cnpj').html("Campo obrigatório");
                        $('#val-cnpj').show();
                        }
                    else if(cnpj.length != 14){
                            form.inputcnpj.focus();
                            $('#val-cnpj').html("O CNPJ precisa ter 14 dígitos");
                            $('#val-cnpj').show();
                    }
                    else{
                        $('#val-cnpj').html("");
                        $('#val-cnpj').hide();
                    }

                    if(nomeEmpresa == ""){ 
                        form.inputnomeempresa.focus();
                        $('#val-nome-empresa').html("Campo obrigatório");
                        $('#val-nome-empresa').show();
                    }
                    else{
                        form.inputnomeempresa.focus();
                        $('#val-nome-empresa').html("");
                        $('#val-nome-empresa').hide();
                    }



                }

                if(senha == ""){ 
                    form.password.focus();
                    $('#val-pass').html("Campo obrigatório");
                    $('#val-pass').show();
                    }
                else if(senha.length < 6){
                        form.inputcnpj.focus();
                        $('#val-pass').html("A senha precisa ter no mínimo 6 caracteres");
                        $('#val-pass').show();
                }
                else{
                    $('#val-pass').html("");
                    $('#val-pass').hide();
                }

                if(cidade == ""){ 
                    form.inputcidade.focus();
                    $('#val-end-cid').html("Campo obrigatório");
                    $('#val-end-cid').show();
                }
                else{
                    form.inputcidade.focus();
                    $('#val-end-cid').html("");
                    $('#val-end-cid').hide();
                }

                if(cep == ""){ 
                    form.inputcep.focus();
                    $('#val-cep').html("Campo obrigatório");
                    $('#val-cep').show();
                }
                else{
                    form.inputcep.focus();
                    $('#val-cep').html("");
                    $('#val-cep').hide();
                }

                if(endereco == ""){ 
                    form.inputendereco.focus();
                    $('#val-end').html("Campo obrigatório");
                    $('#val-end').show();
                }
                else{
                    form.inputendereco.focus();
                    $('#val-end').html("");
                    $('#val-end').hide();
                }
                
                if(confirmSenha == ""){
                    form.confirmPassword.focus();
                    $('#val-pass-conf').html("Campo obrigatório");
                    $('#val-pass-conf').show();
                    return false;
                }
                else
                if(confirmSenha != senha){
                    form.confirmPassword.focus();
                    $('#val-pass-conf').html("As senhas não coincidem");
                    $('#val-pass-conf').show();
                    return false;
                }
                else{
                    form.confirmPassword.focus();
                    $('#val-pass-conf').html("");
                    $('#val-pass-conf').hide();
                }

            }


            $('#select-reg').on('change', function (e) {
                var optionSelected = $("option:selected", this);
                var valueSelected = this.value;
                if(valueSelected == "estabelecimento"){
                    $("#user-details").hide();
                    $("#estabelecimento-details").show();
                }
                else{
                    $("#user-details").show();
                    $("#estabelecimento-details").hide();
                }
            });
        </script>
    </body>

</html> 