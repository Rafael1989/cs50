<?php

    // require common code
    require_once("includes/common.php"); 

    // escape username and password for safety
    $username = mysqli_real_escape_string($connection, $_POST["username"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    $password2 = mysqli_real_escape_string($connection, $_POST["password2"]);
    
    if($username == ''){
        apologize("Favor preencher o usuário");
    }

    if($password == ''){
        apologize("Favor preencher a senha");
    }

    if($password2 == ''){
        apologize("Favor preencher a confirmação da senha");
    }

    if($password != $password2){
        apologize("Favor preencher a confirmação igual a senha");
    }
    // prepare SQL
    $sql = "INSERT INTO users (username, password, cash) values ('$username','$password', 10000.00)";

    // execute query
    $result = mysqli_query($connection, $sql);

    if($result == false){
        apologize("Esse usuário já existe");
    }

    // cache uid in session
    $_SESSION["uid"] = mysqli_insert_id($connection);
    // redirect to portfolio
    redirect("index.php");


?>
