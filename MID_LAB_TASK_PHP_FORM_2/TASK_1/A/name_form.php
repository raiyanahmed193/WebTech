<?php
	$name = $_REQUEST['myname'];
	
	if( $name == " ")
	{
		echo "Enter Your Name";
	}
	else
	{
		echo $name ;
	}
?>

