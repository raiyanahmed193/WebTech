<?php
	require_once('usersModel.php');

	if(isset($_POST['delete'])){

    $id = $_REQUEST['id'];
  	$status = deleteUser($id);
  
  	if($status){
  		header('location: Display.php');
  	}else{
  		echo "Data deleting failed";
  	}
	}
?>