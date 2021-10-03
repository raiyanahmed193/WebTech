<?php
  
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
	
	if( $name == " ")
	{
		echo "Enter Your Name";
	}
	else
	{
		echo $name ;
	}
	}
?>
  
<html>
<head>
<title> Name </title>
</head>
<body>
<form method= "post" action ="#">
Name : <input type ="text" name = "myname" value = ""/></br>
        <input type ="submit" name = "submit" value = "submit"/>

</form>
</body>
</html>
