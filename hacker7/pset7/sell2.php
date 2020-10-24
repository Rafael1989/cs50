<?php

    // require common code
    require_once("includes/common.php"); 

    // escape username and password for safety
    $symbol = mysqli_real_escape_string($connection, $_GET["s"]);
    $uid = $_SESSION["uid"];
    
    // prepare SQL
    $sql = "SELECT shares FROM trade WHERE uid = '$uid' and symbol = '$symbol'";
    

    // execute query
    $result = mysqli_query($connection, $sql);
    $shares;
    
    while ($row = mysqli_fetch_array($result)){ 
    	$shares = $row["shares"];
    }
    

    // prepare SQL
    $sql = "DELETE FROM trade WHERE uid = '$uid' AND symbol = '$symbol'";
    

    // execute query
    $result = mysqli_query($connection, $sql);

    if($result == false)
    	apologize("Favor contactar o suporte, servidor em manutenção.");
    	
    $s = lookup($symbol);
    
    $sum = $shares * $s->price;
    	
    // prepare SQL
    $sql = "UPDATE users SET cash = cash + '$sum' WHERE uid = '$uid'";
    

    // execute query
    $result = mysqli_query($connection, $sql);
    
    if($result == false)
    	apologize("Favor contactar o suporte, servidor em manutenção.");
    	
    $sql = "INSERT INTO transaction (uid, tipo, symbol, shares, price, date) VALUES('$uid', 'COMPRA', '$symbol', '$shares', 1000, NOW())";

    // execute query
    $result = mysqli_query($connection, $sql);
    
    if($result == false)
    	apologize("Favor contactar o suporte, servidor em manutenção.");
    
    redirect("index.php");
    	
    

    

?>
