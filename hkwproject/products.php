<!--products page for inventory unit 2 assignment w/ inline css
Author: Heather Whittlesey
6/8/20  -->

<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/fadestyle.css">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Signika:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Created 99-99-9999 by your name -->
<!-- This page is an example php application. -->
<title>Whittlesey Ceramic Studios</title>

<div class="nav">
  <a href=http://localhost/hkwproject/index.php "#home">Home</a>
  <a href="#purchase">Purchase</a>
  <a class="active"<a href="#supplies">Supplies</a>
  <a href="#classes">Classes</a>
  <a href="#contact">Contact</a>
  <a href="#collections">Collections</a>
  <a href="#about">About</a>

  <h1>Whittlesey Ceramic Studios</h1>

</head>
<body>

<h2>Underglazes</h2>

<table>
  <tr>
    <th>Color</th>
    <th>Price per 1/4 lb</th>
    <th>Price per lb</th>
    <th>Availability</th>
  </tr>
  <tr>
    <td>Robins's Egg</td>
    <td>$10.24</td>
    <td>$40.00</td>
    <td>10 lbs</td>
  </tr>
  <tr>
    <td>Clover</td>
    <td>$8.89</td>
    <td>$32.00</td>
    <td>9 lbs</td>
  </tr>
  <tr>
    <td>Lobster</td>
    <td>$11.20</td>
    <td>$42.00</td>
    <td>15 lbs</td>
  </tr>
  <tr>
    <td>Canary Yellow</td>
    <td>$10.25</td>
    <td>$40.00</td>
    <td>12 lbs</td>
  </tr>
  <tr>
    <td>Wedgewood</td>
    <td>$6.00</td>
    <td>$22.00</td>
    <td>10 lbs</td>
  </tr>
  <tr>
    <td>Chartreuse</td>
    <td>$9.89</td>
    <td>$22.00</td>
    <td>8 lbs</td>
  </tr>
</table>

<h2>Clays</h2>

<table>
  <tr>
    <th>Type</th>
    <th>Price per 25 lb box - wet </th>
    <th>Price per 100 lb bag - dry</th>
    <th>Availability</th>
  </tr>
  <tr>
    <td>Stoneware</td>
    <td>$16.00</td>
    <td>$40.00</td>
    <td>10000 lbs</td>
  </tr>
  <tr>
    <td>Stoneware w/Manganese</td>
    <td>$17.00</td>
    <td>$42.00</td>
    <td>45000 lbs</td>
  </tr>
  <tr>
    <td>Earthenware</td>
    <td>$16.00</td>
    <td>$40.00</td>
    <td>10000 lbs</td>
  </tr>
  <tr>
    <td>Porcelain</td>
    <td>$19.00</td>
    <td>$47.00</td>
    <td>8000 lbs</td>
  </tr>
  <tr>
    <td>Raku</td>
    <td>$16.00</td>
    <td>$40.00</td>
    <td>18000 lbs</td>
  </tr>


</table>



<?php //Creating array using array function.
$Underglazes = array("Robins's Egg", "Clover", "Lobster", "Canary Yellow", "Wedgewood", "Chartreuse",);



//var_dump($Underglazes);

?>

<footer>
<?php

echo "Supply prices do not include shipping.<br />";
echo "Shipping calculated at check-out.";


include 'inc_navigation.php';
include 'welcome.php';

require 'inc_footer.php';

?>


</footer>



</body>
</html>
