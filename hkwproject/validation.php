<!DOCTYPE html>
<html>
<head>


  <meta charset="utf-8">
  <meta http-equiv="x-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ bootstrap links ---------->

<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/fadestyle.css">


<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Signika:wght@300&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<title>Pottery Store</title>

<div class="handscontainer">
  <img src="images/hands.png" alt="vase" class="image">

  <style>
  .error {color: blue;}
  </style>

</head>
<body>

     <h1></h1>

    <div class="nav">
      <a class="active" href="#home">Home</a>
      <a href="#purchase">Purchase</a>
      <a href=http://localhost/hkwproject/products.php "#supplies">Supplies</a>

      <a href="#classes">Classes</a>
      <a href="#contact">Contact</a>
      <a href="#collections">Collections</a>
      <a href="#about">About</a>


    </div>

    <hr/>

    <div class="sidenav">
      <a href=http://localhost/hkwproject/index.php "#supplies">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href=http://localhost/hkwproject/itemform.php "#submissions">Submissions</a>
      <a href="#contact">Contact</a>
      <a href=http://localhost/hkwproject/products.php "#supplies">Supplies</a>
      <button class="dropdown-btn">Login Dropdown
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href=http://localhost/hkwproject/logindisplay.php "#login display">Login Display</a>
        <a href=http://localhost/hkwproject/validation.php "#login">Login</a>
      </div>
      <a href="#contact">Search</a>
    </div>

<?php

// This opens the txt file and reads from it and closes it.
    $isLogin = 'false';

    $userName = $userErr = "";
    $password = $password2 = "";

    $CounterFile = "password.txt";
    $Hits = 0;








    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $userName = "Username is required";
      } else {
        $password = test_input($_POST["name"]);
      }


      if (empty($_POST["password"])) {
        $userErr= "Password is required";
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
        $result = fgets($CounterFile); //fgets reads the record
        echo $result;

        fclose($fp);

    }

    ?>


      <div class="container">
          <div class="row">
  			<div class="col-md-5 mx-auto">
  			<div id="first">
  				<div class="myform form ">
  					 <div class="logo mb-3">
  						 <div class="col-md-12 text-center">

  							 <h1>&ensp;&ensp;Login</h1>
  						 </div>
  					</div>
                     <form action="" method="post" name="login">
                             <div class="form-group">
                                <label for="exampleInputEmail1">Username</label><span class="error">* <?php echo $userName;?></span>
                                <input type="username" name="username"  class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
                             </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Password</label><span class="error">* <?php echo $password;?></span>
                                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                                <p><span class="error">* required field</span></p>
                             </div>
                             <div class="form-group">
                                <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                             </div>
                             <div class="col-md-12 text-center ">
                                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                             </div>
                             <div class="col-md-12 ">
                                <div class="login-or">
                                   <hr class="hr-or">
                                   <span class="span-or">or</span>
                                </div>
                             </div>
                             <div class="col-md-12 mb-3">
                                <p class="text-center">
                                   <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                   </i> Signup using Google
                                   </a>
                                </p>
                             </div>
                             <div class="form-group">
                                <p class="text-center">Don't have account? <a href="#" id="signup">Sign up here</a></p>
                             </div>
                          </form>

  				</div>
  			</div>
  			  <div id="second">
  			      <div class="myform form ">
                          <div class="logo mb-3">
                             <div class="col-md-12 text-center">
                               <style>
                               h1 {
                                 text-align:justify;
                               }
                                     </style>
                                <h1>&ensp;&nbsp;Signup</h1>


                             </div>
                          </div>
                          <form action="#" name="registration">
                             <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                             </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                             </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                             </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="username" name="username"  class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
                             <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                             </div>
                             <div class="col-md-12 text-center mb-3">
                                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                             </div>
                             <div class="col-md-12 ">
                                <div class="form-group">
                                   <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                                </div>
                             </div>
                              </div>
                          </form>
                       </div>
  			</div>
  		</div>
        </div>

  </body>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>


</body>
</html>
