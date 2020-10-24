<?php

    // require common code
    require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>CC50 Finanças: Buy</title>
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
                <th></th>
            </tr> 

        <?php 
            $uid = $_SESSION["uid"];
            $sql = "SELECT symbol FROM stocks"; 
	    $result = mysqli_query($connection, $sql); 
	    while ($row = mysqli_fetch_array($result)){ 
        ?>
        	<form action="buy2.php" method="GET">
			<tr>
			    <td><input name="symbol"  type="text" value="<?php echo $row["symbol"] ?>"></td>
			    <td><input name="shares" type="text"></td>
			    <td><input type="submit" value="Comprar" /></td>
			</tr>
		</form>
	<?php } ?>
        </table> 
    </div>
 
    <div id="bottom">
      <a href="index.php">Home</a>
    </div>
    <div id="bottom">
      <a href="logout.php">log out</a>
    </div>

  </body>

</html>
