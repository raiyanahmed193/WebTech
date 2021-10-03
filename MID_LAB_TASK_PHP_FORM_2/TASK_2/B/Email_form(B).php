<?php
  
	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['myemail'];
	
	if( $email == " ")
	{
		echo "Enter Your Email";
	}
	else
	{
		echo $email ;
	}
	}
?>
  
<html>
<head>
<title> Email </title>
</head>
<body>
<form method= "post" action ="#">
Email : <input type ="email" name = "myemail" value = ""/></br>
        <input type ="submit" name = "submit" value = "submit"/>

</form>
</body>
</html>
