<?php

	if(isset($_REQUEST['submit']))
	{
		$Name = $_REQUEST['myname'];

		if( ($Name != "") && (str_word_count($Name) >= 2) && ((ord($Name) >=65 && ord($Name) <=90) || (ord($Name) >=97 && ord($Name) <=122)) )
		{
			echo $Name;
		}
		else
		{
			echo "Invalid input. <br/><br/> Input format: <br/> A. Cannot be empty <br/> B. Contains at least two words <br/> C. Must start with a letter <br/> D. Can contain a-z, A-Z, period, dash only<br/><br/>";
		}
	}

?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post">
		<b>NAME:<b> <br> <input type="text" name="myname" value=""/> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>