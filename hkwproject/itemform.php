<!-- Artist Applicant page, Featuring artistingd displaying in a gallery
by Heather Whittlesey
6/30/20 -->



<!DOCTYPE HTML>
<html>
<head>
  <style>
  .error {color: red;}
  </style>
</head>
<body>

<?php
// define variables and set to empty values
$name = $email = $sex = $address =  $city = $state =  $website = $medium = $price = $statement = $resume = "";

$nameErr = $addressErr= $cityErr = $stateErr = $statementErr = $priceErr =   "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city = test_input($_POST["city"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["state"])) {
    $stateErr = "state is required";
  } else {
    $state = test_input($_POST["state"]);
  }

  if (empty($_POST["statement"])) {
    $statementErr = "statement is required";
  } else {
    $statement = test_input($_POST["statement"]);
  }

  if (is_numeric($price)) {
    $pricetErr = "price must be a number";
  } else {
    $price = test_input($_POST["price"]);
  }




$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);

$address = test_input($_POST["address"]);
$city = test_input($_POST["city"]);
$state = test_input($_POST["state"]);
$website = test_input($_POST["website"]);
$medium = test_input($_POST["medium"]);
$price= test_input($_POST["price"]);
$statement = test_input($_POST["statement"]);
$resume = test_input($_POST["resume"]);



}





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h3>Artist Gallery Submissions</h3>
<p> Artists should submit their portfolios by April 30th 2021 in order to be considered in the following years show. </p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
&nbsp
  Sex:
  <input type="radio" name="sex" value="female">Female
  <input type="radio" name="sex" value="male">Male
  <input type="radio" name="sex" value="other">Other
  <br><br>
  Address: <input type="text" name="address">
    <span class="error">* <?php echo $addressErr;?></span>
  City: <input type="text" name="city">
      <span class="error">* <?php echo $cityErr;?></span>
  State: <input type="text" name="state">
    <span class="error">* <?php echo $stateErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Medium: <input type="text" name="medium">
  <br><br>
  Price: <input type="text" name="price">
  <span class="error">* <?php echo $priceErr;?></span>
  <br><br>

  Material:
  <input type="radio" name="Material" value="Glass">Glass
  <input type="radio" name="Material" value="Paper">Paper
  <input type="radio" name="Material" value="Wood">Wood
  <input type="radio" name="Material" value="Clay">Clay
  <input type="radio" name="Material" value="Electronic Media">Electronic
  <input type="radio" name="Material" value="Metal">Metal
  <input type="radio" name="Material" value="Metal">Mixed
  <br><br>

  Artist Statement: <textarea name="statement" rows="5" cols="40"></textarea>
    <span class="error">* <?php echo $statementErr;?></span>
  <br><br>

  Resume: <textarea name="resume" rows="5" cols="40"></textarea>
  <br><br>

  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h3>Review your information:</h3>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $sex;
echo "<br>";
echo $address;
echo "<br>";
echo $city;
echo "<br>";
echo $state;
echo "<br>";
echo $website;
echo "<br>";
echo $medium;
echo "<br>";
echo $price;
echo "<br>";
echo $statement;
echo "<br>";
echo $resume;
?>

</body>
</html>
