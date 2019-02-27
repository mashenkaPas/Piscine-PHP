<?php
session_start();
if ($_POST["submit"] == "OK"  && $_POST["login"] != "" && $_POST["passwd"] != "")
{
  $login = $_POST["login"];
  $pass = $_POST["passwd"];
  $hashedPass = hash("sha512", $pass);
  if (!(file_exists("private/")))
    mkdir("private");
  $my_file = 'private/passwd';
  if (!(file_exists($my_file))) {
    $data = serialize([["login" => $login, "passwd" => $hashedPass]]);
    file_put_contents($my_file, $data);
  }
  else {
    $data = unserialize(file_get_contents($my_file));
    foreach ($data as $value) {
      foreach ($value as $key => $val) {
        if ($key == "login" && $val == $login) {
          echo "ERROR\n";
          die();
        }
      }
    }
    array_push($data, ["login" => $login, "passwd" => $hashedPass]);
    file_put_contents($my_file, serialize($data));
  }
  echo "OK\n";
}
else {
  echo "ERROR\n";
}
?>
