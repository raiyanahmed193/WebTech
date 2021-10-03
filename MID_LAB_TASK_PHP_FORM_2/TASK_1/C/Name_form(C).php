<?php
  
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
	
	}
	
?>
  
<html>
<head>
<title> Name </title>
</head>
<body>
<form method= "post" action ="#">
Name : <input type ="text" name = "myname" value = 
"<?php
if (isset($name))
{
echo $name;
}
?>	"/></br>
        <input type ="submit" name = "submit" value = "submit"/>

</form>
</body>
</html>
