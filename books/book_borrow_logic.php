<?php

	   
session_start();     
	if(isset ($_SESSION['userid']))
  
  {
	   
	$ID = $_SESSION["userid"];
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');

    

	
	// $result = mysqli_query($con,$sql);
	// while($data = mysql_fetch_array($result))
		// $sql = "SELECT * FROM `books` INNER JOIN `book_request` on book_request.B_ID = books.B_ID and book_request.M_ID='$ID'";
      
		$sql = "SELECT * FROM books WHERE (SELECT DISTINCT TITLE FROM `books` )";
		
		($result = mysqli_query($con,$sql);
		
	while ( $data = mysqli_fetch_array($result))
	
	{$t = $data['TITLE'];
		$a = $data['AUTHOR'];
		$p = $data['PUBLISHER'];
		
		echo ("Title = $t <br> AUTHOR = $a <br> PUBLISHER = $p");
	}
		
		
	
	
	
	
	
	
	
  }

?>