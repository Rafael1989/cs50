<?php

    // require common code
    require_once("includes/common.php"); 

?>

<!DOCTYPE html>

<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>CC50 Finanças: History</title>
  </head>

  <body>
    
    <div id="top">
      <a href="index.php"><img alt="CC50 Finanças" src="images/logo.png" style="height: 200px;"></a>
    </div>

    <div id="middle">
        <h1>Transações</h1>
        <table>
            <tr>
    	        <th>Type</th>
                <th>Symbol</th>
                <th>Shares</th>
                <th>Price</th>
                <th>Date</th>
            </tr> 

        <?php 
            $uid = $_SESSION["uid"];
            $sql = "SELECT * FROM transaction WHERE uid = '$uid'"; 
	    $result = mysqli_query($connection, $sql); 
	    while ($row = mysqli_fetch_array($result)){ 
        ?>
	        <tr>
		    <td><?php echo $row["tipo"] ?></td>
	            <td><?php echo $row["symbol"] ?></td>
	            <td><?php echo $row["shares"] ?></td>
	            <td><?php echo $row["price"] ?></td>
	            <td><?php echo $row["date"] ?></td>
		</tr>
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
