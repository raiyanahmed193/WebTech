<?php
	$gender = $_REQUEST['gender'];
	
	if( $gender == " ")
	{
		echo "Select Your Gender";
	}
	else
	{
		echo $gender ;
	}
?>

