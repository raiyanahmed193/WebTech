<?php
  
	if(isset($_REQUEST['submit']))
	{
		$dob = $_REQUEST['mydob'];
	
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
