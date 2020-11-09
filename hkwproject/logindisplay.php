<!-- Login and password display with validation
by Heather Whittlesey
6/30/20 -->



<?php
global $isLogin;
$isLogin = false;

function searchPasswordFile($userName, $password) {
    $fp = fopen("password.txt", "r"); //  $fp is file pointer variable
    //fopen starts the stream
    //fwrite ($fp, “wormywalter\n hermwerm”); -This is writing a record

    $usernameFound = false;
    $passwordFound = false;

    while (!feof($fp)) {
        $line = fgets($fp);
        $line = trim($line);

        if ($line === $userName) {
            $usernameFound = true;
            continue;
        }

        if ($usernameFound === true) {
            if ($line === $password) {
                $passwordFound = true;
                break;
            }

            $usernameFound = false;
        }
    }

    fclose($fp);

    if ($usernameFound === true && $passwordFound === true) {
        return true;
    } else {
        return false;
    }
}



?>



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

$userName = $userNameErr = "";
$password = $passwordErr = "";

//$CounterFile = "password.txt";
//$Hits = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$userNameErr = "Username is required";
	} else {
		$userName = test_input($_POST["name"]);
	}

	if (empty($_POST["password"])) {
		$passwordErr = "Password is required";
	} else {
		$password = test_input($_POST["password"]);
	}

	$isLogin = searchPasswordFile($userName, $password);
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
  Username: <input type="text" name="name" value="<?= $userName; ?>">
  <span class="error">* <?php echo $userNameErr;?></span>
  <br><br>
  Password: <input type="text" name="password" value="<?= $password; ?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  <p><span class="error">* required field</span></p>
    <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['create'])) {
     $fp2 = fopen('password.txt', 'a');
     fwrite($fp2, $userName);
     fwrite($fp2, $password);
     fclose($fp2);
}

?>

<form method ="post"  action = "welcome.php"//action = "<?php echo isset($_POST['create']);?>">
<input type="submit" name="create" value="Create Login">
</form>

<?php
if ($isLogin === true) {
	echo "<h2>Record:</h2>";
	echo "Username and Password match!<br>";
	echo $userName;
	echo "<br>";
	echo $password;
	echo "<br>";
}


?>

</body>
</html>
