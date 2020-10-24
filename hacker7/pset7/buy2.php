<?php

    // require common code
    require_once("includes/common.php"); 

    // escape username and password for safety
    $symbol = mysqli_real_escape_string($connection, $_GET["symbol"]);
    $uid = $_SESSION["uid"];
    $shares = $_GET["shares"];
    
    if($shares <= 0)
    	apologize("Favor inserir um valor positivo");
    	
    $sql = "SELECT symbol FROM stocks where symbol = '$symbol'"; 
	    $result = mysqli_query($connection, $sql);
    
    // execute query
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) == 0)
    	apologize("Favor inserir uma ação válida");
    	
    $s = lookup($symbol);
    
    $sum = $shares * $s->price;
    
    $sql = "SELECT cash FROM users where uid = '$uid'"; 
    
    $result = mysqli_query($connection, $sql);
    
    $row = mysqli_fetch_array($result);
    
    $cash = $row["cash"];
    
    if($sum > $cash)
    	apologize("Sua conta não tem saldo suficiente");
    
    // prepare SQL
    $sql = "INSERT INTO trade (uid, symbol, shares) VALUES('$uid', '$symbol', '$shares')
ON DUPLICATE KEY UPDATE shares = shares + VALUES(shares)";

    // execute query
    $result = mysqli_query($connection, $sql);
    
    if($result == false)
    	apologize("Favor contactar o suporte, servidor em manutenção.");
    	
    	
    // prepare SQL
    $sql = "UPDATE users SET cash = cash - '$sum' WHERE uid = '$uid'";
    

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
