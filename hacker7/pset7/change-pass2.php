<?php

    // require common code
    require_once("includes/common.php"); 

    // escape username and password for safety
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    $password2 = mysqli_real_escape_string($connection, $_POST["password2"]);
    $uid = $_SESSION["uid"];
    
    if($password != $password2)
    	apologize("Favor colocar a mesma senha para confirmar");

    // prepare SQL
    $sql = "update users set password = '$password' WHERE uid = '$uid'"; 
    
    // execute query
    $result = mysqli_query($connection, $sql);

    // if we found a row, remember user and redirect to portfolio
    if ($result == false)
    	apologize("Favor contactar o suporte");
    
    redirect("index.php");

?>
