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

    $category = $_POST['category'];
    $language = $_POST['language'];
    $uploader = $_POST['uploader'];
    if($category == "Kategori Seçiniz..." && $language == "Dil Seçiniz..." && $uploader == "Kullanıcıya göre ara...")
    {
        $query ="SELECT * FROM videos";
			if($result = mysqli_query($con,$query))
			{
				while($row = mysqli_fetch_array($result))
				{
				$id = $row["id"];
				$name = $row["name"];
				$url = $row["url"];
				echo "<div class = 'col-sm-3'>
                <video src='$url' width='250px' height = '250px' controls>
                </video>
                <span class = videoTitle>$name</span>
                </div>";
		
				}
				 mysqli_free_result($result);
			}	
    }
?>