<?php
  
	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['myemail'];
	
	}
	
?>
  
<html>
<head>
<title> Email </title>
</head>
<body>
<form method= "post" >
Email: <input type ="email" name = "myemail" value = 
"<?php
if (isset($email))
{
echo $email;
}
?>	"/></br>
        <input type ="submit" name = "submit" value = "submit"/>

</form>
</body>
</html>
