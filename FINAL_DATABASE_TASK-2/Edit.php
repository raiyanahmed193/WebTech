<?php
	require_once('usersModel.php');
	$id = $_REQUEST['id'];
	$user = getUserById($id);
?>

<html>
<head>
	<title>Edit item</title>
</head>
<body>

<table>
	<tr>
		<td>
			<form method="post" action="EditCheck.php">
				<fieldset>
					<legend>EDIT PRODUCT</legend>
					Name:<br>
					<input type="text" name="name" value=""><br>
				Buying price:<br>
					<input type="text" name="buyingPrice" value=""><br>
				Selling price:<br>
					<input type="text" name="sellingPrice" value=""><br>
				    <input type="checkbox" name="display" value=""> Display<br><br>

					<input type="submit" name="save" value="Save">
					<input type="hidden" name="id" value="<?=$user['id']?>">
						

					
				</fieldset>
			</form>
		</td>
	</tr>
</table>
</body>
</html>