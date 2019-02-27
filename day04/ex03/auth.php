<?php
function auth($login, $passwd) {
  $my_file = '../ex01/private/passwd';
  $hashedPass = hash("sha512", $passwd);
  $data = unserialize(file_get_contents($my_file));
  foreach ($data as $value) {
    if ($value["login"] == $login && $value["passwd"] == $hashedPass)
      return true;
  }
  return false;
}
?>
