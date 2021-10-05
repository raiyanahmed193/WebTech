<?php

	if(isset($_REQUEST['submit']))
	{
		if(isset($_REQUEST['mygender']))
		{
			echo $_REQUEST['mygender'];
		}
		else
		{
			echo "At least one of them must be selected <br/><br/>";
		}
	}

?>


<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post">
		<b>Gender:<b> <br>
			<input type="radio" name="mygender" value="Male"> Male
			<input type="radio" name="mygender" value="Female"> Female
			<input type="radio" name="mygender" value="Other"> Other <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>