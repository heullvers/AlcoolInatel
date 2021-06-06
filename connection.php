<?php

    $servername = "localhost";
    $user = "root";
    $db = "alcool";
    $password = "";
    
    $conn = new mysqli($servername, $user, $password, $db);

    if($conn->connect_errno){
        die("Connection failed");
    }
    else{
        echo "Conectado";
    }

?>