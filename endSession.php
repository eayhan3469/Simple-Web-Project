<?php
session_start();
	if(isset($_SESSION['user_id'])){
		
		$user_id = $_SESSION['user_id'];
		$connection = mysqli_connect('localhost','root','','v-u-a-p');
		$data = mysqli_query($connection, "SELECT * FROM user WHERE id = '$user_id'");
		
		$row_cnt = mysqli_num_rows($data);
		
		if($row_cnt == 1){
			$row = mysqli_fetch_array($data);
			$userName = $row['userName'];
		}
		else
		{
			session_destroy();
			header("Location: Index.php");
			exit;
		}
	}
	else{
		session_destroy();
			header("Location: Index.php");
			exit;
	}
    session_destroy();
    echo "Oturum Sonlandırıldı";
    header("refresh:2; url= Index.php");

?>