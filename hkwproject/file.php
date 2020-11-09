

<body>
  <p>This is an example of a php application that reads a file of contact information. It uses a loop until
  eof.</p>
  <?php

  $fp = fopen(“filename.txt”,”w”);
  fwrite ($fp, “String to write”);

  <p>This is an example of a php application that writes a file of contact information. It uses hard coded
values that are in the code.</p>
<?php
$ContactFile = "data\\contact.txt";
$fp= fopen($ContactFile,"w");
$Name = array("John Jolly", "Mary Marvel", "Doug Douglas", "Sarah Sentry", "Betty Butler");
$Phone = array("123 123-56578", "222 222-2222","321 333-4321", "456 654-4322", "555 567-5432");
for($i=0; $i<count($Name); ++$i){
 echo "Name: $Name[$i] <br>Phone: $Phone[$i] <br><br>";
 fwrite($fp, $Name[$i]."\n");

 fwrite($fp, $Phone[$i]."\n");
}
fclose($fp);



</body>
