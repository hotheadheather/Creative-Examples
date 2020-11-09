<!-- index array (labeled with numbers) vs associative arrays
you cannot put assoc. array element directly into double quotes


Print contents of one autoglobal variable from an autoglobal array:-->

<?php
$assocArray = [
  'Kiln' => 'a toaster that fires clay around 2600 degrees F.',
  'Wheel' => 'a wheel that allows for throwing pottery.',
  'Slab Roller' => 'how to make slab construction.',
  'Canvas Table' => 'tables used to knead and build clay.',
  'Trimmer' => 'essential tools for trimming pots.',
  'Wire' => 'wires that cut pottery off the wheel.',
  'Rib' => 'essential tools for smoothing and texture.',
  'Bats'=> 'plates used to throw pottery on.'
];


echo "Some tools of the trade include {$assocArray['Bats']}";

 ?>

<!--Print contents of one autoglobal variable from $_ENV autoglobal array:
-->

<?php
$x = 100;
$y = 250;

function multi() {
  $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}

multi();
echo $z;

?>


<!--USER-influenced by Shell-environment variables:
-->



 <?php
 echo "<pre>";
 print_r($_ENV);
 echo "</pre>";
  ?>


<?php


echo 'My username is ' .$_ENV["USER"] . '!';
?>
