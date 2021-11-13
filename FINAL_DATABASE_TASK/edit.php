<?php

	require_once('usersModel.php');

	$id = $_REQUEST['id'];
	
	$user = getUserById($id);
	
?>

<html>
<head>
	<title>Edit user</title>
</head>
<body>
	<center>
		<a href="home.php">Back </a> |
		<a href="login.html">logout </a>
	</center>

	<form method="post" action="updateUser.php">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="<?=$user['Username']?>"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="<?=$user['Password']?>"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value="<?=$user['Email']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$user['Id']?>"></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>