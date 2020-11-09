<?php
$ShowForm = TRUE;
$errorCount = 0;
$Name = "";
$Age = "";
$Gender = "";
if (isset($_POST['Submit']))
{
$Name = validateInput($_POST['Name'],"Your Name");
$Age = validateNumber($_POST['Age'],"Your Age");
$Gender = validateGender($_POST['Gender'],"Your Gender");
if ($errorCount!=0)
$ShowForm = TRUE;
else
 {
 $ShowForm = FALSE;
echo "<p>Your form has been submitted. Thank you, $Name.</p>\n";
echo "<p>Age $Age </p>\n";
echo "<p>Gender $Gender </p>\n";
echo $Name;
}
}
if ($ShowForm == TRUE)
{
?>
<form name="contact" action="ProcessAndValidateOneForm.php" method="post">
<p>Your Name:
<input type="text" name="Name" value="<?php echo $Name ?> " /></p>
<p>Your Age:
<input type="text" name="Age" value="<?php echo $Age ?> " size="5" /></p>

<p>Gender:
<input type="text" name="Gender" value="<?php echo $Gender ?> " size="5"
/></p>
<p>
<input type="reset" value="Clear Form" />
&nbsp;&nbsp;
<input type="submit" name="Submit" value="Send Form" />
</p>
</form>
<?php
}
?>
