<?php
	
	if(isset($_POST['submit']))
	{
		$name = $_FILES['file']['name'];
        //$size = $_FILES['file']['size'];
        //$type = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];
    
        if(isset($name)){
            echo 'ok';
        }
        
    
    }
        
?>

<!DOCTYPE html>
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
       <form action="test.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="file"/><br><br>
			<input type="submit" name="submit" value="upload" /> </form>

</body>
</html>

