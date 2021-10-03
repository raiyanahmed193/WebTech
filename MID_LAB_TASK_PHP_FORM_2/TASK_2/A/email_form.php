<?php
	$email = $_REQUEST['myemail'];
	
	if( $email == " ")
	{
		echo "Enter Your Email";
	}
	else
	{
		echo $email ;
	}
?>

