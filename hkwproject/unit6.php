
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

$Dir = ".";
$DirEntries = scandir($Dir);
foreach ($DirEntries as $Entry) {
if ((strcmp($Entry, '.') != 0) && (strcmp($Entry, '..') != 0)) {
echo "<a href=\"$Dir\\$Entry\">" . $Entry . "</a><br />";
echo filesize($Dir."\\".$Entry)."<br /> \n";
} } ?>

$isLogin = 'false';

$userName = $userErr = "";
$password = $password2 = "";

$CounterFile = "password.txt";
$Hits = 0;


 // $fp is file pointer variable



 //$line = fgets($fp);
 //$line = trim(fgets($fp));


//$fp= fopen($CounterFile,"r"); //fopen starts the stream
 //fwrite ($fp, “wormywalter\n hermwerm”); -This is writing a record
  //fclose($fp);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $userName = "Username is required";
  } else {
    $password = test_input($_POST["name"]);
  }

  if (empty($_POST["password"])) {
    $userErr = "Password is required";
  } else {
    $password2 = test_input($_POST["password"]);
  }

}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}

function searchPasswordFile($userName, $password) {
  $fp= fopen($CounterFile,"r"); //  $fp is file pointer variable
                                 //fopen starts the stream
                                //fwrite ($fp, “wormywalter\n hermwerm”); -This is writing a record
  echo fgets($CounterFile);

  fclose($fp);

}


?>

<h2>PHP Form Validation</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Username: <input type="text" name="name">
  <span class="error">* <?php echo $userName;?></span>
  <br><br>
  Password: <input type="text" name="password">
  <span class="error">* <?php echo $userErr;?></span>
  <br><br>
  <p><span class="error">* required field</span></p>
    <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Record:</h2>";
echo $password;
echo "<br>";
echo $password2;
echo "<br>";


?>

</body>
</html>





<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: blue;}
</style>
</head>
<body>
<h1>File Processing</h1>
<hr />
<p>This is an example of a php application that gives list of files in a directory. </p>


<h2>PHP Form Validation</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Username: <input type="text" name="name">
  <span class="error">* <?php echo $userName;?></span>
  <br><br>
  Password: <input type="text" name="password">
  <span class="error">* <?php echo $userErr;?></span>
  <br><br>
  <p><span class="error">* required field</span></p>
    <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
