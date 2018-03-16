<?php
    include "connect.php";
    session_start();
    if(isset($_POST['sub'])) {
    	print_r($_POST);
        $comm=$_POST['com1'];
        $comm2=$_POST['com2'];
        $qry="INSERT INTO `feedb` (`cm1`,`cm2`) VALUES('$comm','$comm2');";
        mysqli_query($conn,$qry) or die("Error inserting");
        header('location:register.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
			<h1>User Feedback</h1>
			<ul class="nav">
				<li><a href="home.html">Home</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				 <li><a href="feed.php">Feedback</a></li>
			</ul>
		<div class="main-content">
			<h2>Products</h2>'
			
					<img src="download.jpg" width="100" height="90"><br>
					feedback  <br> <textarea rows="2" cols="10" name="com1"></textarea>

			
				
				<br>
				
					<img src="download1.jpg" width="100" height="90"><br>
					feedback <br>  <textarea rows="2" cols="10" name="com2"></textarea>
					
			
				<input type="submit" value="submit" name="sub">
		</div>
	</body>
</html>
