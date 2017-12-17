


<?php

    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = $_POST['email'];
		$password = $_POST['password'];
        $connection = mysqli_connect('localhost','root','','v-u-a-p');
        $data = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        
        if($result = mysqli_query($connection,$data))
			{
				while($row = mysqli_fetch_array($result))
				{
				$username2 = $row["userName"];
				}
				 mysqli_free_result($result);
			}
        if (isset($username2)) {
			$result = mysqli_query($connection,$data);
			$row = mysqli_fetch_array($result);
			$id = $row["id"];
			session_start();
			$_SESSION['user_id'] = $id;
			echo "success";
            header("refresh:2; url= loginPage.php");
		}else
		{
			echo "failed";
		}
    }
?>