<?php
	session_start();

	$tryAgain = 0;

	if(isset($_POST['Submit']))
  {
    $Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$Email = $_POST['Email'];

    if($Username != "")
    {
      if($Password != "")
      {
				if($Email != "")
				{
					if($_POST['Password'] == $_POST['ConfirmPassword'])
					{
						if( (ord($Username)>=65 && ord($Username)<=90) || (ord($Username)>=97 && ord($Username)<=122) )
						{
							$myfile = fopen('InsttuctorInfo.txt', 'a');

							$myfile = fopen('InsttuctorInfo.txt', 'r');

			        while(!feof($myfile))
			        {
			          $data = fgets($myfile);
								$User = explode('|', $data);

			          if($Username == trim($User[0]))
				        {
									echo "Username already taken. Please try with another one....";
									$tryAgain = 1;
								}
							}

							if($tryAgain == 0)
							{
								$myfile = fopen('InsttuctorInfo.txt', 'a');
								$myuser = $Username."|".$Password."|".$Email."\r\n";
								fwrite($myfile, $myuser);

								header('location:Login.html');
							}
						}
						else
						{
							echo "Username must start with a letter";
						}
					}
					else
					{
						echo "Password didn't match....";
					}
				}
        else
				{
					echo "Invalid email....";
				}
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
