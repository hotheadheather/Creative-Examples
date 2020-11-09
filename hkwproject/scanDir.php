<!DOCTYPE HTML>
<html>

<body>

  <?php
  if (isset($_POST['submit_btn']))
  {
  $username = $_POST['name'];
  $password = $_POST['pwd'];
  if (empty($username))
  {
  echo "Please enter a username";
  } else $username = $username;

  if (empty($password))
  {
  echo "Please enter a password";
  } else $password = $password;
  $text = $username . "," . $password . "\
  ";
  $fp = fopen('accounts.txt', 'a+');
  $path = 'accounts.txt';
  if (file_exists($path))
  {
  $contents = file_get_contents($path);
  $contents = explode("\
  ", $contents);
  $users = array();
  foreach ($contents as $value) {
  $user = explode(',', $value);
  $users[$user[0]] = $user[1];
  }
  if (isset($users[$_POST['name']])) {
  echo "that user already exists please enter a different user name";
  }
  }
  else
  {
  echo "NO";
  }
  if(!empty($username) && !empty($password) && fwrite($fp, $text) && !isset($users[$_POST['name']])) {
  header('Location: login.html');
  }
  fclose ($fp);
  $path = 'accounts.txt';
  }
  ?>
</body>

</html>
