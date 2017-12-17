<?php
	$con = mysqli_connect('localhost','root','');//your host, username and password 

    if(!$con)
	{
		echo 'Not Connected To Server';
	}

	if(!mysqli_select_db($con,'v-u-a-p'))//select your database name
	{
		echo 'Database not selected';
	}
?>

<?php
$banner1 = '<a href="BANNER1_URL" target="_blank"><img src="images/Reklam1" alt="BANNER1_ALT" title="BANNER1_TITLE"></a>';
$banner2 = '<a href="BANNER2_URL" target="_blank"><img src="images/Reklam2" alt="BANNER2_ALT" title="BANNER2_TITLE"></a>';
$banner3 = '<a href="BANNER3_URL" target="_blank"><img src="images/Reklam3" alt="BANNER3_ALT" title="BANNER3_TITLE"></a>';
$banner4 = '<a href="BANNER4_URL" target="_blank"><img src="images/Reklam4" alt="BANNER4_ALT" title="BANNER4_TITLE"></a>';
$banners = array($banner1, $banner2, $banner3, $banner4);
shuffle($banners);
?>

<html>
<head>
	<title>OrtakLab</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Responsive -->
	<link href="styles/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="styles/Style.css" rel="stylesheet" media="screen">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="styles/bootstrap/js/bootstrap.js"></script>
</head>

<body>
<!--////////////////////
/////###HEADER###///////
/////////////////////-->
	<div class="row header" id="myNavHeader">
		<nav class="navbar navbar-inverse navbar-fixed-top border-delete">
			<div class="navbar-header" id="navDown">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</button>
				<script>
					$(document).ready(function () {
						$(".navbar-toggle").click(function () {
							$(".navbar-header").toggleClass("back");
						});
					});
					
					$(window).bind('scroll', function () {
    					if ($(window).scrollTop() > 150) {
        					$('.fix').addClass('back');
    					} 
						else {
        				$('.fix').removeClass('back');
    					}
					});
				</script>
				
				<a class="navbar-brand" href="#">
					<img src="images/Logo.png" style="margin-top: -20px; margin-left: 100px;">
				</a>
			</div>
			<div class="collapse navbar-collapse fix backColor" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a id="white" href="#" data-toggle="modal" data-target="#myModal">Upload a Video</a></li>
					<li><a id="white" href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign Up / <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
		
<!--///////////////////////////
/////###POPUP SIGN UP###///////
////////////////////////////-->	
		<script>$('#myModal').modal('show');</script>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Sign Up</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Sign Up</a></li>
                        </ul>
                        <!-- Tab panels -->
                        <div class="tab-content">
							
							<!-- Login Form-->
                            <div class="tab-pane active" id="Login">
								<form role="form" class="form-horizontal" name="loginForm" method = "post" action="login.php">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="email1"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Login</button>
										<button type="button" class="btn btn-default btn-sm">
                                            Cancel</button>
                                        </div>
                                </div>
                                </form>
                            </div>
							
                            <div class="tab-pane" id="Registration">
								<!-- Register Form -->
								<form role="form" class="form-horizontal" name="registerForm" method="post" action="register.php">
								<div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-sm-10">
                                    	<input type="text" class="form-control" name="username"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" name="kaydet" class="btn btn-primary btn-sm">
                                            Sign Up</button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
									
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>		
		<div class="midText">
			<p class="text-center styleP">Record a Video Upload and Watch Your Own Video</p>
		</div>
        <form role="form" class="form-horizontal" name="searchForm" method = "post" action="Index.php">
		<div class="form-group" id="selectBoxes">
			<select cl	ass="form-control" id="sel1" name="category">
				<option>Kategori Seçiniz...</option>
				<option>Komedi</option>
				<option>Korku</option>
				<option>Amatör Çekim</option>
				<option>Kaza</option>
			</select>
			<select class="form-control" id="sel2" name="language">
				<option>Dil Seçiniz...</option>
				<option>Türkçe</option>
				<option>İngilizce</option>
				<option>Almanca</option>
				<option>Fransızca</option>
			</select>
            
			<select class="form-control" id="sel3" name="uploader">
                <option>Kullanıcıya göre ara...</option>
                <?php
			         $query ="SELECT * FROM videos";
			         if($result = mysqli_query($con,$query))
			     {
				while($row = mysqli_fetch_array($result))
				{
				$uploader = $row["uploader"];
                if($write != $uploader)
                {   $write = $uploader;
                    echo "<option> $write </option> ";
                }
				}
				 mysqli_free_result($result);
			}	
?>
			</select>
			<button type="submit" class="btn btn-primary searchButton">Search</button>
		</div></form>
	</div>

<!--///////////////////////
/////###CONTAINER###///////
////////////////////////-->

	
	<div class="container-fluid">
		<div class="video-container">
		<?php
            if(isset($_POST['category']) && isset($_POST['language']) && isset($_POST['uploader']))
            {
                $category = $_POST['category'];
                $language = $_POST['language'];
                $uploader = $_POST['uploader'];
                
                if($category == "Kategori Seçiniz..." && $language == "Dil Seçiniz..." && $uploader == "Kullanıcıya göre ara...")
            {
                $query ="SELECT * FROM videos";
			    $result = mysqli_query($con,$query);
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
                else if($category != "Kategori Seçiniz..." && $language == "Dil Seçiniz..." && $uploader == "Kullanıcıya göre ara...")
                {
                $query ="SELECT * FROM videos WHERE category = '$category'";
			    $result = mysqli_query($con,$query);
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
                else if($category == "Kategori Seçiniz..." && $language != "Dil Seçiniz..." && $uploader == "Kullanıcıya göre ara...")
                {
                $query ="SELECT * FROM videos WHERE language = '$language'";
			    $result = mysqli_query($con,$query);
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
                else if($category == "Kategori Seçiniz..." && $language == "Dil Seçiniz..." && $uploader != "Kullanıcıya göre ara...")
                {
                $query ="SELECT * FROM videos WHERE uploader = '$uploader'";
			    $result = mysqli_query($con,$query);
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
                else if($category != "Kategori Seçiniz..." && $language != "Dil Seçiniz..." && $uploader == "Kullanıcıya göre ara...")
                {
                $query ="SELECT * FROM videos WHERE category = '$category' AND language = '$language'";
			    $result = mysqli_query($con,$query);
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
                else if($category != "Kategori Seçiniz..." && $language == "Dil Seçiniz..." && $uploader != "Kullanıcıya göre ara...")
                {
                $query ="SELECT * FROM videos WHERE category = '$category' AND uploader = '$uploader'";
			    $result = mysqli_query($con,$query);
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
                else if($category == "Kategori Seçiniz..." && $language != "Dil Seçiniz..." && $uploader != "Kullanıcıya göre ara...")
                {
                $query ="SELECT * FROM videos WHERE language = '$language' AND uploader = '$uploader'";
			    $result = mysqli_query($con,$query);
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
                else if($category != "Kategori Seçiniz..." && $language != "Dil Seçiniz..." && $uploader != "Kullanıcıya göre ara...")
                {
                $query ="SELECT * FROM videos WHERE category = '$category' AND language = '$language' AND uploader = '$uploader'";
			    $result = mysqli_query($con,$query);
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
            else
            {
                $query ="SELECT * FROM videos";
                $result = mysqli_query($con,$query);
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
       
    ?>
		</div>
	</div>
	
 <div class="reklam">

  <?php print $banners[0] ?>

    </div>   
    
<!--/////////////////////
/////###FOOTER###///////
/////////////////////-->
	<div class="container-fluid footer-wrapper">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-4">
                    <p>Company</p>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#" target="_blank">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Community</p>
                    <ul>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Member benefits</a></li>
                        <li><a href="#">Fundraise</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Subscribe for OrtakLab updates</p>
                    <div id="subscribe-form-container"><div data-reactroot="" class="subscribe-form"><div><div class="input-group"><input type="text" class="form-control" value=""><span class="input-group-btn"><button class="btn btn-cfl-yellow"><span>Subscribe</span></button></span></div></div></div></div>
                    <span class="social-icon">
                        <a href="" title="Follow us on Twitter" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </span>
                    <span class="social-icon">
                        <a href="https://www.facebook.com/CoFoundersLab/" title="Follow us on Facebook" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="separator separator-white"></div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <picture>
                        <source srcset="/img/logo/blue_cropped.png" media="(max-width: 480px)">
                        <img class="cofounderslab-logo" src="/img/logo/blue.png" alt="OrtakLab">
                    </picture>
                    <span class="copyright">©2016</span>
                </div>
                <div class="col-md-4 col-md-offset-4 col-xs-6 text-right footer-bottom-links">
                    <span><a href="#">Privacy Policy</a></span><span><a href="#">Terms of Service</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

	
</body>

</html>