<?php
    session_start();
    if(isset($_SESSION['messageLogin'])){
        $msg = "Credenciais inválidas";
        echo '<script>alert("'.$msg.'")</script>';
        unset($_SESSION['messageLogin']);
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Entrar | Álcool+</title>
        <link rel="stylesheet" href="../assets/css/styles-register.css">
        <script src="../assets/js/jquery-3.6.0.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="title">Entrar</div>
            <form action="../login.php" name="form" method="POST">
                <div class="option-register">
                    <span class="details">Você é um?</span>
                    <select name="select" class="select-register" id="select-reg">
                        <option value="cliente" selected>Cliente</option>
                        <option value="estabelecimento">Estabelecimento</option>
                    </select>
                </div>
                <div class="user-details" id="user-details">
                    <div class="input-box">
                        <span class="details">CPF</span>
                        <input type="text" placeholder="Digite seu CPF" name="inputcpf">
                        <span class="validate-message validate-message-cpf" id="val-mes"></span>
                    </div>   
                </div>
                <div class="user-details" id="estabelecimento-details">
                    <div class="input-box">
                        <span class="details">CNPJ</span>
                        <input type="text" placeholder="Digite seu CNPJ" name="inputcnpj">
                        <span class="validate-message validate-message-cnpj" id="val-cnpj"></span>
                        
                    </div>
                </div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Senha</span>
                        <input type="password" placeholder="Digite sua senha" name="password">
                        <span class="validate-message validate-message-password" id="val-pass"></span>
                    </div>
                </div>
                
                <div class="button">
                    <input type="submit" value="Entrar" onclick="return validar()">
                </div>
                <a href="signup.php">Ainda não possui uma conta?</a>
            </form>
        </div>
        <script>
	
            function isNumber(str) {
                return !isNaN(str)
            }

            function validar(){
               
               var senha = form.password.value;
               var selectR = $( "#select-reg option:selected" ).text();

               if(selectR == "Cliente"){

                    var cpf = form.inputcpf.value;
                    if(cpf == ""){ //CPF
                        form.inputcpf.focus();
                        $('#val-mes').html("Campo obrigatório");
                        $('#val-mes').show();
                        return false;
                    }
                else if(cpf.length != 11){
                        form.inputcpf.focus();
                        $('#val-mes').html("O CPF precisa ter 11 dígitos");
                        $('#val-mes').show();
                        return false;
                }
                else if(!isNumber(cpf)){
                        $('#val-mes').html("Apenas números");
                        $('#val-mes').show();
                        return false;
                }
               else{
                    $('#val-mes').html("");
                    $('#val-mes').hide();
                    }
                }
                else{ //Estabelecimento
                    var cnpj = form.inputcnpj.value;
                    if(cnpj == ""){ //CNPJ
                        form.inputcnpj.focus();
                        $('#val-cnpj').html("Campo obrigatório");
                        $('#val-cnpj').show();
                        return false;
                        }
                    else if(cnpj.length != 14){
                            form.inputcnpj.focus();
                            $('#val-cnpj').html("O CNPJ precisa ter 14 dígitos");
                            $('#val-cnpj').show();
                            return false;
                    }
                    else if(!isNumber(cnpj)){
                            $('#val-cnpj').html("Apenas números");
                            $('#val-cnpj').show();
                            return false;
                    }
                    else{
                        $('#val-cnpj').html("");
                        $('#val-cnpj').hide();
                    }
                }

                if(senha == ""){ //senha
                    form.password.focus();
                    $('#val-pass').html("Campo obrigatório");
                    $('#val-pass').show();
                    return false;
                }
                else{
                    $('#val-pass').html("");
                    $('#val-pass').hide();
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