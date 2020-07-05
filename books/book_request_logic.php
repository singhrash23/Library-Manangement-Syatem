<?php   
       
	   
session_start();     
	if(isset ($_SESSION['userid']))
  
  {
	   
	$ID = $_SESSION["userid"];
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');

      if(isset($_GET['book_id']))
	  {
		  $B_ID = $_GET['book_id'];
		  
		  		$ins =  "insert into book_request (M_ID,B_ID)
				values ('$ID','$B_ID')";
        
		
		
		if(mysqli_query($con,$ins)){
		
		echo "Book Request Sent" ;
 
         // $sql = "update books set AVAILABLE = '1' where B_ID='$B_ID' ";
		
		mysqli_query($con,$sql);
		 
		  header('location: /project/books?book_id='.$B_ID.'&request=true');
	}
	
	else 
		
		{
			
			echo  "Book Request Not Sent";
	
	 
	 		 
		  header('location: /project/books?book_id='.$B_ID.'&request=false');

		}
		
		
	  }


  }






?>