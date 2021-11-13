<?php
	session_start();

	if(isset($_POST['Submit']))
  {
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];

		if($Username != "")
    {
			if($Password != "")
      {

        $myfile = fopen('InsttuctorInfo.txt', 'r');

        while(!feof($myfile))
        {
          $data = fgets($myfile);
					$User = explode('|', $data);

          if($Username == trim($User[0]) && $Password == trim($User[1]))
	        {
						$_SESSION['Username'] = $Username;
						$_SESSION['flag'] = 'true';
						header('location: Dashboard.php');
					}
        }
        echo "Invalid username/password....";
			}
      else
      {
				echo "Invalid password....";
			}
		}
    else
    {
			echo "Invalid username....";
		}
	}
?>
