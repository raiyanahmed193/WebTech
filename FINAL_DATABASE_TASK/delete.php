<?php
	require_once('usersModel.php');
	$id = $_REQUEST['id'];
	$status = deleteUser($id);

	if($status){
		header('location: userlist.php');
	}else{
		header('location: userlist.php');
	}

?>