<?php
$userName = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

	$con = mysqli_connect('127.0.0.1','root','');//your host, username and password 
	if(!$con)
	{
		echo 'Not Connected To Server';
	}
	if(!mysqli_select_db($con,'v-u-a-p'))//select your database name
	{
		echo 'Database not selected';
	}
	
$sql = "SELECT userName FROM user WHERE userName = '$userName' OR email = '$email'";
$result = $con ->query($sql);
if($result ->num_rows > 0)
{
	echo "Username or Email already exist!";
	header("refresh:2;url = Index.php");
}
else{


$sql_2 = "INSERT INTO user (userName,email,password)
	VALUES ('$userName','$email','$password')";
	if ($con->query($sql_2) == TRUE) {
    echo "Successful";
	header("refresh:2;url = Index.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
?>