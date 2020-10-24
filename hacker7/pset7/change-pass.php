<?php

    // require common code
    require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>CC50 Finanças: Change Password</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="CC50 Finanças" src="images/logo.png" style="height: 200px;"></a>
    </div>

    <div id="middle">
      <h1>Alterar senha</h1>
      <form action="change-pass2.php" method="post">
        <table>
          <tr>
            <td>Senha:</td>
            <td><input name="password" type="password"></td>
          </tr>
          <tr>
            <td>Confirmar Senha:</td>
            <td><input name="password2" type="password"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Alterar"></td>
          </tr>
        </table>
      </form>
    </div>

    <div id="bottom">
        <a href="index.php">Home</a>
    </div>

  </body>

</html>
