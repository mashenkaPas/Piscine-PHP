<?php
$valid_passwords = array ("zaz" => "jaimelespetitsponeys");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  echo "<html><body>That area is accessible for members only</body></html>\n";
//  die ("Not authorized");
}
else {
  $user = ucfirst($user);
  header('Content-Type: text/html');
  $img = base64_encode(file_get_contents("../img/42.png"));
  echo '
  <html>
    <body> Hello Zaz <br />
      <img  src="data:png;base64,'. $img. '">
    </body>
  </html>'."\n";
}
?>
