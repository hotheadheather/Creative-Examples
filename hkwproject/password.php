<!-- Unit 4 - creating password array to plug into php dynamic website
password validation+:
1. contain at least 12 characters and no spaces.
2. contain at least one number, one lowercase letter, one uppercase letter, and
one non alphanumeric character.
Author: Heather Whittlesey
6/23/2020-->
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<head>
</head>

</body>

<?php //Creating array using array function.
$Passwords = array("tEll%1453123", "green453", "hello88884412", "purpleHeart8",
"Fortune50000", "1234567895637101","Whitecart@1gggg","Yellow455#jkt9","Cucumberlemon","4523647r0910","B202024521426","J@zz0452126r","Za0202452@26",);
echo "Passwords array is created.<br />";

var_dump($Passwords);

// --still accepts all numbers and all digits not a combo.
//combination may contain special characters like !@#$%&*.
//string length should be more than 12 or more. (12-20)
//no spaces
?>
<?php

$pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%&*-]).{12,}$^";
$matches= preg_grep ("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%&*-]).{12,20}$^", $Passwords);

if (preg_grep($pattern, $Passwords)==1)
echo "These passwords are not good.<br />";

else
echo "These passwords are good.<br />";

?>
<?php

$matches= preg_grep ("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%&*-]).{12,20}$^", $Passwords);
print_r ($matches);




?>



</body>
</html>
