<?php

    // require common code
    require_once("includes/common.php"); 

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
                <th>Shares</th>
            </tr> 

        <?php 
            $uid = $_SESSION["uid"];
            $sql = "SELECT symbol, shares FROM trade WHERE uid = '$uid'"; 
	    $result = mysqli_query($connection, $sql); 
	    while ($row = mysqli_fetch_array($result)){ 
        ?>
	        <tr>
		    <td><?php echo $row["symbol"] ?></td>
	            <td><?php echo $row["shares"] ?></td>
		</tr>
	<?php } ?>
        </table> 
    </div>
 
    <div id="bottom">
      <a href="change-pass.php">Change Password</a>
    </div>
    <div id="bottom">
      <a href="quote.php">Quote</a>
    </div>
    <div id="bottom">
      <a href="buy.php">Buy</a>
    </div>
    <div id="bottom">
      <a href="sell.php">Sell</a>
    </div>
    <div id="bottom">
      <a href="history.php">History</a>
    </div>
    <div id="bottom">
      <a href="logout.php">log out</a>
    </div>

  </body>

</html>
