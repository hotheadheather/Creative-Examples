<?php
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/fadestyle.css">


<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Signika:wght@300&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<title>Pottery Store</title>

<div class="container">
  <img src="images/banner.jpg" alt="vase" class="image">
  <div class="overlay">
    <div class="text">Come Play</div>
  </div>
</div>


</head>
<body>


<h1>Whittlesey Ceramic Studios</h1>
<div class="nav">
  <a class="active" href="#home">Home</a>
  <a href=http://localhost/hkwproject/itemform.php "#submissions">Submissions</a>
  <a href=http://localhost/hkwproject/products.php "#supplies">Supplies</a>


  <a href="#classes">Classes</a>
  <a href="#contact">Contact</a>
  <a href="#collections">Collections</a>
  <a href="#about">About</a>


  <p>
  <img src="images/twitter-icon.png"  alt="icon" />
  <img src="images/facebook-icon.png"  alt="icon" />
  <img src="images/youtube-icon.png"  alt="icon" />
  <img src="images/instagram-icon.png" alt="icon" />
</p>


<p>Today's date is: <?php echo date("m.d.y") ; ?> </p>

</div>


<hr />

<div class="sidenav">


  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href=http://localhost/hkwproject/itemform.php "#submissions">Submissions</a>
  <a href="#contact">Contact</a>
  <a href=http://localhost/hkwproject/products.php "#supplies">Supplies</a>
  <button class="dropdown-btn"> Login Dropdown
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href=http://localhost/hkwproject/logindisplay.php "#login display">Login Display</a>
    <a href=http://localhost/hkwproject/validation.php "#login">Login</a>
  </div>
  <a href="#contact">Search</a>
</div>


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

<p id="statement">Whittlesey Studios offers one of a kind studio space in the heart of the midwest.
  Whether you're a full fledged artist looking for a residency or a beginner learning how to throw or wanting to relax in the studio.
  We offer state of the art equipment such as Brent Pottery wheels and slab rollers to Soldner pug mills.
  Our 4,500 sq ft facilities on 10 acres of untouched land serves as paradise of solitude
  for those wanting to get away from the city rumble and focus on more creative endeavors.  </p>


<?php echo "";?>


<p id="iowabanner">

    <img src="images/bigiowa2.jpg" alt="vase"  />
</p>


<section>

<img src="images/ad-1.png" width="195" height="125" alt="ad" />
<img src="images/ad-2.png" width="195" height="125" alt="ad" />
<img src="images/ad-1.png" width="195" height="125" alt="ad" />
<img src="images/ad-2.png" width="195" height="125" alt="ad" />

</section>




</body>
</html>
