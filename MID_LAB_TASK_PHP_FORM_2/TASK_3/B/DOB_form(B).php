<?php
  
	if(isset($_REQUEST['submit']))
	{
		$dob = $_REQUEST['mydob'];
	
	if( $dob == " ")
	{
		echo "Enter Your Date of Birth";
	}
	else
	{
		echo $dob ;
	}
	}
?>
  
<html>
<head>
<title> Date of Birth </title>
</head>
<body>
<form method= "post" action ="#">
Date of Birth : <input type ="date" name = "mydob" value = ""/></br>
        <input type ="submit" name = "submit" value = "submit"/>

</form>
</body>
</html>
