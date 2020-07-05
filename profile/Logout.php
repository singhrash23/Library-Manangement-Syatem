<!DOCTYPE html>
<html>
   <head>
        <title>LogOut - LMS - LIBARAY MANAGEMENT SYSTEM</title>
		<meta charset="UTF-8"/>
		<link rel="icon" href="/study/Html/fevicon.PNG" type="image/gif">
		<link rel="stylesheet" href="/project/home/lms.css" type="text/css"/>
	</head>
	<body>


<?php
      session_start();
	
	
   
 session_destroy();
	header('Location:/project/login/index.php'); 
	 //echo "<div class='loader'> </div>";
	 
	?>
	</body>
	</html>