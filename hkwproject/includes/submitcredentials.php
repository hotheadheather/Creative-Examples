<?PHP if (isset($_POST['submit'])) {

require 'dbh.php';

$username =$_POST['name'];
$password =$_POST['password'];


if (empty($username) || empty($password)) {
  header("Location:../logindisplay.php?error=emptyfields&name=".$username. "&password".$password)
  exit();
}
else if  (!filter_var($username, FILTER_VALIDATE_USERNAME && !preg_match("/^[a-zA-Z0-9]*$/", $password)) {
  header("Location:../logindisplay.php?error=invalidpassword");
  exit();
}

 else if (!filter_var($username, FILTER_VALIDATE_USERNAME)) {
    header("Location:../logindisplay.php?error=invalidpassword&name=".$username.)
  exit();
}
 else if (!preg_match("/^[a-zA-Z0-9]*$/", $password)) {
      header("Location:../logindisplay.php?error=invalidpassword&name=".$password.)
  exit();
}

 else {

  $sql = "SELECT userIds FROM users WHERE userIds =?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location:../logindisplay.php?error=sqlerror")
  exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if ($resultCheck > 0){
        header("Location:../logindisplay.php?error=usernametaken&password=".$password);
        exit();

    }
    else {
        $sql = "INSERT INTO users (usersPasswords) VALUES (?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../logindisplay.php?error=sqlerror")
            exit();
    }
    else {

      $hashedPwd = password_hash($password, PASSWORD_DEFAULT);


      mysqli_stmt_bind_param($stmt, "s", $username, $password);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);

    }

    }
  }

  }
  mysqli_stmt_close($stmt);
  mysqli_stmt_close($conn);

}

else {
  header ("Location:../index.php");
  exit();

}
