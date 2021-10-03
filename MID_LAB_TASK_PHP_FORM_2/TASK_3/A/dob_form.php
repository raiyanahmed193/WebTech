<?php
	$dob = $_REQUEST['mydob'];
	
	if( $dob == " ")
	{
		echo "Enter Your Date of birth";
	}
	else
	{
		echo $dob ;
	}
?>

