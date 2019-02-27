<?php
session_start();

function error() {
  echo "ERROR\n";
  die();
}

if ($_POST["submit"] == "OK" && $_POST["login"] != "" && $_POST["oldpw"] != "" && $_POST["newpw"] != "")
{
  $found = false;
  $login = $_POST["login"];
  $oldPass = $_POST["oldpw"];
  $newPass = $_POST["newpw"];
  if ($oldPass == $newPass)
    error();
  $oldHashedPass = hash("sha512", $oldPass);
  $newHashedPass = hash("sha512", $newPass);
  $my_file = '../ex01/private/passwd';
  $data = unserialize(file_get_contents($my_file));
  for ($i=0; $i < sizeof($data); $i++) {
    if ($data[$i]["login"] == $login) {
      if ($data[$i]["passwd"] == $oldHashedPass) {
        $data[$i]["passwd"] = $newHashedPass;
        $found = true;
      } else {
        error();
      }
    }
  }
  if (!($found))
    error();
  file_put_contents($my_file, serialize($data));
  echo "OK\n";
}
else
  error();
?>
