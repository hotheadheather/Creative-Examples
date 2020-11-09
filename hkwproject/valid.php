<!-- Login and password display
by Heather Whittlesey
6/30/20 -->



<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: blue;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$userName = $emailErr = "";
$password = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $userName = "Username is required";
  } else {
    $password = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Password is required";
  } else {
    $email = test_input($_POST["email"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Username: <input type="text" name="name">
  <span class="error">* <?php echo $userName;?></span>
  <br><br>
  Password: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <p><span class="error">* required field</span></p>
    <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Record:</h2>";
echo $password;
echo "<br>";
echo $email;
echo "<br>";



?>

</body>
</html>
