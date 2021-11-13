<?php
	require_once('Header.php')
?>

<html>
<head>
	<title>Instructor Dashboard</title>
</head>
<body>

	<table border="1" width="50%" align="center">
		<tr height="80px">
			<td>
        <center>
          <h1>UniHub</h1>
        </center>
			</td>

			<td align="right">
				<h1></h1>Welcome  <b> <?php echo $_SESSION['Username']; ?> </b></a> </h1> <br />

				 <a href="Login.html">Logout</a> <br />
			</td>
		</tr>


	</table>
	<br>
	<br>
	<br>
	<table border="3" align="center">
		<tr>
			<td>
				<ul>
        	<a href="ViewProfile.html"><li>View Profile</li> </a>
					<a href="article.php"><li>Article</li></a>
					<a href="newsfeed.html"><li>News Feed</li></a>
					<a href="searchstudent.html"> <li>Search students</li></a>
					<a href="Companieslist.html"><li>Companies List</li></a>
					<a href="addcourse.html"><li>Course List</li></a>
					<a href="courseapprove.html"><li>Course Request</li></a>

					
				</ul>
			</td>
		</tr>
	</table>
</body>
</html>
