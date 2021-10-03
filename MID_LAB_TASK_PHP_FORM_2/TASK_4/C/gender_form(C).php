<?php
  
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['gender'];
	
	}
	
?>
  
<html>
<head>
<title> Date of Birth </title>
</head>
<body>
<form method= "post" >
Date of Birth: <input type ="date" name = "mydob" value = 
"<?php
if (isset($dob))
{
echo $dob;
}
?>	"/></br>
        <input type ="submit" name = "submit" value = "submit"/>

</form>
</body>
</html>

<html>
<head>
<title> GENDER </title>
</head>
<body>
<form method= "post" action ="gender_form.php">
GENDER : <input type ="radio" name = "gender" value = "<?php
if (isset($gender))
{
echo $gender;
}
?>	"/>MALE
         <input type ="radio" name = "gender" value = "<?php
if (isset($gender))
{
echo $gender;
}
?>	"/>FEMALE
         <input type ="radio" name = "gender" value = "<?php
if (isset($gender))
{
echo $gender;
}
?>	"/>OTHER</br>
        <input type ="submit" name = "submit" value = "submit"/>

</form>
</body>
</html>

