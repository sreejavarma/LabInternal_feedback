<?php
    include "connect.php";
    session_start();
    if(isset($_POST['sub'])) {
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $pass=$_POST['password'];
        $retype=$_POST['Retype'];
        $qry="INSERT INTO `register` (`user_name`,`email`,`password`,`retype`) VALUES('$name','$email','$pass','$retype');";
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
            <div class="p">
        
                <h1>User Feedback</h1>
                <ul class="nav">
                	<li><a href="home.html">Home</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
		 <li><a href="upload.php">Upload</a></li>
		  
        
                </ul>
            </div>
            <div class="main-content">
                <h2>Register</h2>
                <form method="post" action="">
                    Your Name<br> <br><input type="text" id="Your Name" name="Name"> </br><br>
                    Email<br><br> <input type="text" id="Email" name="Email"> </br><br>
		            Password<br><br> <input type="text" id="Password" name="password"></br></br>
                    Retype Password<br><br> <input type="text" id="Retype Password" name="Retype"> <br><br> 
                    <input type="submit" name="sub" value="Register " class="bold"> 
                    </form>
            </div>
            
        </body>
    </html>

