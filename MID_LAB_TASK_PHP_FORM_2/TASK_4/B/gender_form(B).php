<?php
  
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['gender'];
	
	if( $gender == " ")
	{
		echo "Select your Gender";
	}
	else
	{
		echo $gender ;
	}
	}
?>
  
<html>
<head>
<title> GENDER </title>
</head>
<body>
<form method= "post" action ="gender_form.php">
GENDER : <input type ="radio" name = "gender" value = ""/>MALE
         <input type ="radio" name = "gender" value = ""/>FEMALE
         <input type ="radio" name = "gender" value = ""/>OTHER</br>
        <input type ="submit" name = "submit" value = "submit"/>

</form>
</body>
</html>
