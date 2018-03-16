<?php
    include "connect.php";
    session_start();
    if(isset($_POST['sub'])) {
        $name=$_POST['Name'];
        $mat=$_POST['Material'];
        $size = $_POST['Size'];
        $des=$_POST['Desc'];
        $qry="INSERT INTO `upload` (`type_dress`,`mate`,`size`,`descr`) VALUES('$dress','$mat','$size','$des');";
        mysqli_query($conn,$qry) or die("Error inserting");
        header('location:upload.php');
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
		    <li><a href="upload.php">Upload</a></li>
		    
            <li><a href="logout.php">LogOut</a></li>
                </ul>
            </div>
            <div class="main-content">
                <h2>Upload</h2>
                <form method="post" action="">
                    Name<br> <br><input type="text" id="Dress" name="Name"> </br><br>
                    Description<br><br> <textarea rows="5" cols="58" id="Des" name="Desc"> </textarea></br></br>
  		    
                    <input type="submit" name="sub" value="Upload" class="bold"> 
                    </form>
            </div>
            
        </body>
    </html>

