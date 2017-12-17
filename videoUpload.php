<?php

	$con = mysqli_connect('127.0.0.1','root','');//your host, username and password 
	if(!$con)
	{
		echo 'Not Connected To Server';
	}
	if(!mysqli_select_db($con,'v-u-a-p'))//select your database name
	{
		echo 'Database not selected';
	}

	if(isset($_POST['submit']))
	{
        $name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $displayName = $_POST['displayName'];
        $category = $_POST['category'];
        $lang = $_POST['language'];
        $uploader = $_POST['uploader'];
        
        $url = "http://localhost/Simple-Web-Project/uploaded/$name";
		$sql = "INSERT INTO videos (name,url,displayName,category,language,uploader) VALUES ('$name','$url','$displayName','$category','$lang','$uploader')";
        if(isset($name)){
            if(!empty($name)){
                $location = 'uploaded/';
              if(move_uploaded_file($tmp_name,$location.$name))
              {
                  echo 'Uploaded!';
                  mysqli_query($con,$sql);
                  header("refresh:2; url= loginPage.php");
              }
                
            } else {
                echo 'Please choose a file.';
            }
        }
	}
?>
