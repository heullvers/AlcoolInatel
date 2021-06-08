<?php

    include("../controller/EstabelecimentoController.php");
    $controller = new EstabelecimentoController();
    $retorno = $controller->listarTodos();
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../assets/css/styles-dashboard.css">
        <link rel="stylesheet" href="../assets/css/styles-view.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        
        <title>Álcool+ | Dashboard</title>
    </head>
    <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="#" class="nav__logo">Álcool+</a>
                    </div>
                        <div class="nav__link collapse" id="home">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Home</span>
                        </div>
                        <div class="nav__link collapse" >
                            <ion-icon name="cube-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Produtos</span>
                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu" >
                                <a href="#" class="collapse__sublink" id="addProduct">Cadastrar</a>
                                <a href="#" class="collapse__sublink" id="viewProduct">Visualizar</a>
                            </ul>
                        </div>

                        <div class="nav__link collapse" id="estabelecimentos">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Estabelecimentos</span>
                        </div>
                        <div class="nav__link collapse" id="clientes">
                            <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Clientes</span>
                        </div>
                        <a href="../index.html" class="nav__link">
                            <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Sair</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        
        <div id="conteudo">
            

        </div>


        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="../assets/js/jquery-3.6.0.js"></script>
        <script>
            var link = window.location.href;
            var url = new URL(link);
            var c = url.searchParams.get("tela");

            if(c == "ve"){
                $(document).ready(function() {
                    $("#conteudo").load("viewEstabelecimento.php");
                });
            }
            else{
                $(document).ready(function() {
                    $("#conteudo").load("viewHome.html");
                });
            }
            
            //Home
            $("#home").click(function() {
                $(function(){
                    $("#conteudo").load("viewHome.html");
                });
            });


            //Product
            $("#viewProduct").click(function() {
                $(function(){
                    $("#conteudo").load("viewProduto.html");
                });
            });

            $("#addProduct").click(function() {
                $(function(){
                    $("#conteudo").load("cadastroProduto.html");
                });
            });

            //Estabelecimento
            $("#estabelecimentos").click(function() {
                $(function(){
                    $("#conteudo").load("viewEstabelecimento.php");
                });
            });

            //Cliente
            $("#clientes").click(function() {
                $(function(){
                    $("#conteudo").load("viewCliente.html");
                });
            });
            
        </script>
        <!-- ===== MAIN JS ===== -->
        <script src="../assets/js/dashboard.js"></script>
    </body>
</html>