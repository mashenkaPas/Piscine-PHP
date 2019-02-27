<?php
session_start();
if ($_GET["submit"] == "OK"  && $_GET["login"] != NULL && $_GET["passwd"] != NULL)
{
  $login = $_GET["login"];
  $pass = $_GET["passwd"];
  $_SESSION["login"] = $login;
  $_SESSION["pass"] = $pass;
}

?>

<html>
<body>
  <form action = "index.php" method ="get">
    login:<input type ="text" name ="login" value="<?php echo $_SESSION["login"] ?>">
    <br>
    passwd:<input type ="text" name="passwd" value="<?php echo $_SESSION["pass"] ?>">
    <br>
    <input type ="submit" value="OK" name="submit"/>
  </form>
</body>
</html>
