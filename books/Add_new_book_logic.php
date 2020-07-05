<?php 


session_start();     
	if(isset ($_SESSION['userid']))
   {
	   
	$ID = $_SESSION["userid"];
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');


if($_SERVER['REQUEST_METHOD']=='POST')
	 {
		
		 $target = "book_pics/".basename($_FILES['Image']['name']); 
	 
		 
	 
	     $image = $_FILES['Image']['name'];
		
		
		$title = $_POST['Title'];
		$author = $_POST['Author'];
		$publisher = $_POST['Publisher'];
		$price = $_POST['Price'];
		$quantity = $_POST['Quantity'];
		$published_date = $_POST['Publish_Date'];
		$category = $_POST['Category'];
		
		
		// echo "$image <br/>$title <br/> $author <br/> $publisher <br/> $price <br/>   $quantity <br/> $published_date <br/> $category <br/> ";
		
		$ins =  "insert into books (BOOK_IMAGE,TITLE,AUTHOR,PUBLISHER,PRICE,DATE_PUBLISHED,CATEGORY) values ('$image','$title','$author','$publisher','$price','$published_date','$category')";
	for($i=0;$i<$quantity;$i++)
	{		
		if(!mysqli_query($con,$ins)){
		
		echo "Data not Inserted" ;
 
         
		
		 header('location: add_new_book.php?insert=false');
	}
	
	else echo  "Data Inserted";
	
	 $dataInsert = "true";
	 		 
    header('location: add_new_book.php?insert='.$dataInsert.'');

		
	 }
	 }
	 
   }
   
  
	 
	 ?>