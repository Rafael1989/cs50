<?php

    // require common code
    require_once("includes/common.php"); 

    // escape username and password for safety
    $symbol = mysqli_real_escape_string($connection, $_POST["symbol"]);

    $s = lookup($_POST["symbol"]);

?>

<!DOCTYPE html>

<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>CC50 Finanças: Home</title>
  </head>

  <body>
    
    <div id="top">
      <a href="index.php"><img alt="CC50 Finanças" src="images/logo.png" style="height: 200px;"></a>
    </div>

    <div id="middle">
        <h1>Ações</h1>
        <table>
            <tr>
    	        <th>Symbol</th>
                <th>Name</th>
                <th>Price</th>
                <th>Time</th>
                <th>Change</th>
                <th>Open</th>
                <th>High</th>
                <th>Low</th>
            </tr> 
            <tr>
	    	<td><?php echo $s->symbol ?></td>
            	<td><?php echo $s->name ?></td>
            	<td><?php echo $s->price ?></td>
            	<td><?php echo $s->time ?></td>
            	<td><?php echo $s->change ?></td>
            	<td><?php echo $s->open ?></td>
            	<td><?php echo $s->high ?></td>
            	<td><?php echo $s->low ?></td>
	    </tr>
	
        </table> 
    </div>
 
    <div id="bottom">
      <a href="index.php">Home</a>
    </div>
    <div id="bottom">
      <a href="logout.php">log out</a>
    </div>
