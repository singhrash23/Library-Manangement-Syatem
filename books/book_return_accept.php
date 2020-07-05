<?php   
       
	   
session_start();     
	if(isset ($_SESSION['userid']))
  
  {
	   
	$ID = $_SESSION["userid"];
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');

      if(isset($_GET['book_id'])&& isset($_GET['mem_id']))
	  {
		  $B_ID = $_GET['book_id'];
		  $mem_ID=$_GET['mem_id'];
		  
		  		$ins =  "DELETE FROM book_borrow WHERE B_ID = '$B_ID' and BORROWED_BY='$mem_ID' ";
        
		
		
		if(mysqli_query($con,$ins)){
		
		// echo "Book Request Sent" ;
 
         $sql = "update books set AVAILABLE = '0' where B_ID='$B_ID' ";
		
		mysqli_query($con,$sql);
      
	   // delete column from book_request table


		 
		  header('location: /project/profile/');
	}
	
	else 
		
		{
			
			echo  "Book Request Not Sent";
	
	 
	 		 
		  header('location: /project/books?book_id='.$B_ID.'&request=false');

		}
		
		
	  }


  }






?>