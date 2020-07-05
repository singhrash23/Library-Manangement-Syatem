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
		  $B_date = date("Y-m-d"); 
		 	 $e_y = date('Y');              
		 $e_m = date('m');
		 $e_m = $e_m+3;
		 $e_d = date('d');
		 
		// echo  "Fname = ",$fname," Lname = ",$lname,"Password =",$password,"Email = ",$email,"Adreess = ",$add;
		 
		 
		 $O_DATE = $e_y."-".$e_m ."-".$e_d ;  
		  
		  		$ins =  "insert into book_borrow (B_ID,BORROWED_BY,ISSUED_BY,ISSUE_DATE ,OUT_DATE)
				values ('$B_ID','$mem_ID','$ID','$B_date','$O_DATE')";
        
		
		
		if(mysqli_query($con,$ins)){
		
		// echo "Book Request Sent" ;
 
         $sql = "update books set AVAILABLE = '1' where B_ID='$B_ID' ";
		
		mysqli_query($con,$sql);
      
	   // delete column from book_request table

		$sql = "DELETE FROM book_request where B_ID='$B_ID' and M_ID='$mem_ID' ";
		
		mysqli_query($con,$sql);
		 
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