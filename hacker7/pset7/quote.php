<?php

    // require common code
    require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>CC50 Finanças: Log in</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="CC50 Finanças" src="images/logo.png" style="height: 200px;"></a>
    </div>

    <div id="middle">
      <form action="quote2.php" method="post">
        <table>
          <tr>
            <td>Usuário:</td>
            <td><input name="symbol" type="text"></td>
          </tr>
          <tr>   
            <td></td>
            <td><input type="submit" value="Search"></td>
          </tr>
        </table>
      </form>
    </div>

    <div id="bottom">
         <a href="index.php">Home</a>
    </div>

  </body>

</html>
