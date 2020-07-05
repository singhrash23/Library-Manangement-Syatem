<?php 


session_start();     
	if(isset ($_SESSION['userid']))
   {
	   
	$ID = $_SESSION["userid"];
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');


if($_SERVER['REQUEST_METHOD']=='POST')
	 {
		
		$B_ID=$_GET['book_id'];
		if(isset($_POST['Image']))
		{
		 $target = "book_pics/".basename($_FILES['Image']['name']); 
	 
		 
	 
	     $image = $_FILES['Image']['name'];
		 
		 		  $ins = "update books set  BOOK_IMAGE='$image' where B_ID='$B_ID' ";
				  	mysqli_query($con,$ins);

		}
		
		$title = $_POST['Title'];
		$author = $_POST['Author'];
		$publisher = $_POST['Publisher'];
		$price = $_POST['Price'];
		$published_date = $_POST['Publish_Date'];
		$category = $_POST['Category'];
		
		  $ins = "update books set TITLE='$title',AUTHOR='$author',PUBLISHER='$publisher',PRICE='$price',DATE_PUBLISHED='$published_date',CATEGORY='$category' where B_ID='$B_ID' ";


			
		if(!mysqli_query($con,$ins))
		{
		
		echo "Data not Inserted" ;
 
         
		
		  header('location: book_update.php?book_id='.$B_ID.'&&update=false');
	}
	
	else 
	{	
	echo  "Data Inserted";		 
    header('location: book_update.php?book_id='.$B_ID.'&&update=true');
	}
		
	 
	 }
	 
   }
   
  
	 
	 ?>