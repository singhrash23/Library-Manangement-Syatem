<?php 


session_start();     
	if(isset ($_SESSION['userid']))
   {
	   
	
	if(!$_SESSION["userid"]=="")
	{
		
	$ID = $_SESSION["userid"];
	
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');
	
	$sql = "select * from members where M_ID ='$ID' ";
	$result = mysqli_query($con,$sql);
	$data = mysqli_fetch_array($result);
	
	
	
		if(isset($_GET['book_id']))
		{
			$book_id = $_GET['book_id'];
		
		
		// echo $book_id;
	$sql = "DELETE FROM book_request WHERE B_ID='$book_id';";
	 mysqli_query($con,$sql);
	 header('location: /project\profile\index.php' );
	
		}
		
   }
    else
{
	

	header('location: /project\profile\index.php' );

}
   }
?>