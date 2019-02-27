<?php
  $action = array_key_exists("action", $_GET) ? $_GET["action"] : NULL;
  $name = array_key_exists("name", $_GET) ? $_GET["name"] : NULL;
  $value = array_key_exists("value", $_GET) ? $_GET["value"] : NULL;

  if ($action == "set")
    setcookie($name, $value, time() + 3600);
  else if ($action == "get")
  {
      if (isset($_COOKIE[$name]))
      echo $_COOKIE[$name]."\n";
  }
  else if ($action == "del")
  {
      if(isset($_COOKIE[$name]))
        unset($_COOKIE[$name]);
        setcookie($name, NULL, -1);
  }
?>
