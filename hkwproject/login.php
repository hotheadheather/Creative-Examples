<?php
    $connect= mysqli_connect("localhost","root","") or die ("Connection Failed");
    if(!empty($_POST['save']))
    {
      $username=$_POST['un'];
      $password=$_POST['pw'];
      $query = "SELECT * FROM login WHERE username='$username' and password= '$password'";
      $result =mysqli_query($connect, $query);
      $count=mysqli_num_rows($result);
      if($count>0)
      {
      echo "Login successful";
      }
      else
      {
      echo "Login failed";
      }
  }

?>

  <form method="post">
    Enter Username <input type="text" name"un"/>
    </br>
    Enter Password <input type="text" name"pw"/>
    </br>
    <input type="submit" name"save" value="login"/>
  </form>
