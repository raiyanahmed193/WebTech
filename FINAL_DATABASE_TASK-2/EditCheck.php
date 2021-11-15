<?php
	require_once('usersModel.php');

	$name = $_REQUEST['name'];
	$buyingPrice = $_REQUEST['buyingPrice'];
	$sellingPrice = $_REQUEST['sellingPrice'];
	$id = $_REQUEST['id'];

	$user = ['id'=>$id, 'name'=>$name, 'buyingPrice'=>$buyingPrice, 'sellingPrice'=>$sellingPrice];
	$status = editUser($user);

	if($status){
		header('location: Display.php');
	}else{
		echo "Data updating failed";
	}
?>