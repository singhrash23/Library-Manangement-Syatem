   
   <html>
      <head>
	         <title> Books - LMS - LIBARAY MANAGEMENT SYSTEM</title>
			 <link rel = "stylesheet" href = "/project\home\lms.css" type = "text/css"/>
			 <link rel = "stylesheet" href = "books.css" type = "text/css"/>
			 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
              <link rel="icon" href="/project\Images\books-icon-2.png" type="image/gif">
			  <meta charset="utf-8">

		</head>
		
		<body>
		
		<?php 
		session_start();     
	if(isset ($_SESSION['userid']))
   {
	   
	$ID = $_SESSION["userid"];
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');
  
      	$sql = "select * from members where M_ID ='$ID' ";
	$result = mysqli_query($con,$sql);
	$data = mysqli_fetch_array($result);
	
	   $pp = $data['propic'];

     ?>
   
   
      <div class="container">
   
				  
				    <div id="myHeader" class="logo_header">
					    <div class="text"><a href="/project\home\index.php">LMS</a></div>
						
						<?php if(isset($_SESSION['userid'])) 
		
		{
			
			?>
	 <div class="header_profile_div">
	     <div class="img1"> <div class="img">   <?php if(!$pp == "") { ?>
	<img src="/project/profile/propics/<?php

	echo "".$data['propic'].""; ?>"  width="100%"height="auto" />  <?php } ?>  
	</div></div>  <div class="Uname"><?php echo "".$data['FNAME']." ".$data['LNAME']." "; ?></div>
	
	<div class="dropdown"> <ul>
	   
	   <a href = "/project/profile/"><li>My Account</li></a>
	  <a href = "/project/profile/Change_Password.php"> <li>Change Password</li></a>
	  <a href = "/project/profile/logout.php"> <li>Log Out</li></a>
	
	</ul>  </div>
	    </div>
		
		<?php }?>
						
						    <a href="/project\contactus\index.php"><div class="button"><i class="fa fa-fax"></i> <br/>Contact</div>
        <a href="/project\aboutus\index.php"><div class="button"><i class="fa fa-file"></i> <br/>About Us</div>
    <a href="/project\home\index.php"><div class="button"><i class="fa fa-home"></i> <br/>Home</div></a></div>
   
        
		  
		  <?php 
		   
		   if(isset($_GET['book_id']))
		   {
		     $book_Id = $_GET['book_id'] ;
			 
			 $sql = "select * from books where B_ID ='$book_Id' ";
	$result = mysqli_query($con,$sql);
	$bookData = mysqli_fetch_array($result);
			 
			 $book_pic =  $bookData['BOOK_IMAGE'];
			 
			if($bookData['AVAILABLE'] == 0)
			{
				$book_aval = "Yes";
			}
			 
			 else
			 {
				$book_aval = "No"; 
			 }
			 ?>
			 
			 
			  <?php
		if(isset($_GET['request']))
		{
		$request = $_GET['request'];
		
		if($request == 'true')
		{
			?>
   
   <div class='alert'>
  <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span> 
  </br>
    <strong style='text-align:center;'><h2>Book Request Sent</h2></strong> </br> 
	
      </div>
   <?php	
		}
		}
		
		$sql = "select * from book_request where M_ID ='$ID'and B_ID='$book_Id' ";
	$result = mysqli_query($con,$sql);
	 $Count = mysqli_num_rows($result);
	 
	 
		
		?>
		
			 
			 
			 <div class="book_box">
			      <div class="book_pic float-left">
				  <?php if(!$book_pic == "") { ?>
	<img src="/project/books/book_pics/<?php

	echo "".$bookData['BOOK_IMAGE'].""; ?>"  width="100%"height="100%" />  <?php } ?> </div>
				  <div class="book_details float-right"> 
				  <div> 
				  <p>  <span> Title : </span> <?php echo "".$bookData['TITLE']." ";?> </p>  <br/>
				  <p><span> Author: </span> <?php echo "".$bookData['AUTHOR']." ";?> </p>  <br/>
				  <p><span> Publisher: </span> <?php echo "".$bookData['PUBLISHER']." ";?> </p>  <br/>
				  <p><span> Date Published: </span> <?php echo "".$bookData['DATE_PUBLISHED']." ";?> </p>  <br/>
				  <p><span> Price : </span> <?php echo "₹".$bookData['PRICE']." ";?> </p>  <br/>
				  <p><span> Available : </span> <?php echo $book_aval ;?> </p>  <br/>
				  </div>
				  
				      </div>
					  
					  
					  
					  <?php 
					  
					  
					  
					  if($book_aval =='No' || $Count ==1)
			{
									?>  <div><button disabled class="button-1 button_disabled">Request</button></div> <?php

			}
			 
			 else
			 {
									?>  <div><a href="book_request_logic.php?book_id=<?php echo"$book_Id";?>"><button class="button-1">Request</button></a></div> <?php

			 }
				
              if($Count ==1)
			  {
				 
				
                ?>
					  
					<div class="notice"><p><span>Notice : </span> You Already Requested This Book.</p></div> 

               <?php 
			   
			  }
			  
			 
			  if($book_aval =='No')
			  {
				 
				
                ?>
					  
					<div class="notice"><p><span>Notice : </span> Book is not available right now.</p></div> 

               <?php 
			   
			  }
			 if($data['MEMBER_TYPE']=='lib')
			  
			  {
				  if($book_aval =='Yes')
			  {
			  
			  ?>
					<div class="update_remove_btn">
					 <a href="book_update.php?book_id=<?php echo"$book_Id";?>"> <button>Update</button></a>
					 <a href="book_remove.php?book_id=<?php echo"$book_Id";?>"> <button>Remove</button></a>
					  </div>
				 
			
			 
			 
			 <?php
			  }
			  }			 
		   }
   
           ?>
		   	 </div>
		   <br><br>
		  
		<br><br>  
<div class="book_category">		  
		
   <h1 class="heading_bg"> Books </h1> 
   
   <div class="book_column_left">
       
	   <h1>Categories</h1>
	   <ul>
	         <a href="/project/books"><li>All Books</li></a>
	        <a href="/project/books?cate=Math"> <li>Math</li      </a>
	         <a href="/project/books?cate=Physics"><li>Physics</li> </a>
	 <a href="/project/books?cate=Chemistry">    <li>Chemistry</li>    </a>
	 <a href="/project/books?cate=Biology">    <li>Biology</li>      </a>
	 <a href="/project/books?cate=History">    <li>History</li>       </a>
	 <a href="/project/books?cate=Geography">    <li>Geography</li>    </a>
	 <a href="/project/books?cate=Hindi">    <li>Hindi</li>         </a>
	 <a href="/project/books?cate=English">    <li>English</li>      </a>
	 <a href="/project/books?cate=Story Book">    <li>Story Book</li>   </a>
	 <a href="/project/books?cate=Novel">    <li>Novel</li>        </a>
	   </ul>
         
		 </div>
		 
		 
      <div class="book_column_right">
	  
	  <?php
	  if(!isset($_GET['cate']))
	  {
		  $cate='All Available ';
	  
	  $sql = "SELECT * FROM books WHERE AVAILABLE=0   ";
	  $result = mysqli_query($con,$sql);
	  $b_count = mysqli_num_rows($result);
	  
	  }
	  else
	  {
		 $cate = $_GET['cate'];
		$sql = "SELECT * FROM books WHERE AVAILABLE=0 and CATEGORY='$cate' ";
	    $result = mysqli_query($con,$sql);  
        $b_count = mysqli_num_rows($result);

	  }  
	  
	  ?>
	       <h1> <?php echo "$cate";?> Books (<?php echo "$b_count";?>)
		   
		   <?php 	
  if($data['MEMBER_TYPE']=='lib')
  {
		?>
		   <div class="float-right"><a href="/project/books/add_new_book.php" ><button class="add_new_book_button" >Add</button> </a></div>
		   
  <?php } ?>
		   
		   
		   
		   </h1>
		   
		   <div class="overlay">
	      <?php 
		  if($b_count > 0) 
		  {
			  ?>
		  
		  <?php  while($book_data = mysqli_fetch_array($result))
		  {  
	       
		   $book_pic=$book_data['BOOK_IMAGE'];
	  
	  
	  ?>
		  
	  	  <div class="book_view">  <?php if(!$book_pic == "") { ?>
	<img src="/project/books/book_pics/<?php

	echo "".$book_data['BOOK_IMAGE'].""; ?>"  width="100%"height="100%" />  <?php } ?>
			     <div class="book_view_overlay">
				      <a href="/project/books?book_id=<?php echo"".$book_data['B_ID']."";?>&cate=<?php echo"".$book_data['CATEGORY']."";?>"><div class="book_view_button">View</div></a>
					     </div>
				              </div>
							  
		  <?php }

		  }		else

		  { 	echo "<br> <h2> Not Available</h2> <br>";		}  ?>
	  
	  
	</div>
                </div>
   
               </div>
   
               

	  
   
   	         <div class="footer text-center"> © Library Management System <br> 2017-2018 <br> All Rights Reserved.</div>

   <?php
   }
   
   else
{
	

	header('location: /project\login\index.php' );

}
   
   ?>
   </div>
   </body>
   </html>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   