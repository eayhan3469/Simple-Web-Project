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
?>

<html>
	<head>
		<title>Deneme Video</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Responsive -->
		<link href="styles/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="styles/Style.css" rel="stylesheet" media="screen">
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="styles/bootstrap/js/bootstrap.js"></script>
	</head>
 
	<body> 
		<?php
			$query ="SELECT * FROM videos";
			if($result = mysqli_query($con,$query))
			{
				while($row = mysqli_fetch_array($result))
				{
				$id = $row["id"];
				$name = $row["name"];
				echo "<a href = 'watch.php?id=$id'>$name</a></br>";
				}
				 mysqli_free_result($result);
			}	
			mysqli_close($con);
		?>
	</body>

	</html>