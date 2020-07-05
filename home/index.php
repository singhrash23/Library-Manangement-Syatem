
   <html>
    <head>
    <title>LMS - Library Management System</title>
    <link rel="icon" href="/project\Images\books-icon-2.png" type="image/gif">
    <link rel="stylesheet" href="lms.css" type="text/css"/>
    <link rel="stylesheet" href="/project/profile/pro.css" type="text/css"/>
    <link rel="stylesheet" href="/project/books/books.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
	
	<?php 
	session_start();
	require_once('connect.php');
	?>
	
    <div class="container">
    <?php 
	
	
	if(isset($_SESSION['userid'])) 
		
		{
			
			if(!$_SESSION["userid"]=="")
			{
	$ID = $_SESSION["userid"];
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');
	
	$sql = "select * from members where M_ID ='$ID' ";
	$result = mysqli_query($con,$sql);
	$data = mysqli_fetch_array($result);
	
	$pp = $data['propic'];
		}
		}
	
	
	if(!isset($_SESSION['userid']))  /* if  $_SESSION['userid'] is not set */

	{
		
		
		
		
		?>
    <div id="signin" class="sign_header" > <img src="close_btn.png"  onclick="hide();" width="20em" height="auto" alt="close"/> <a href="/project\registration\index.php"><div class="button">SIGNUP</div></a>
	<a href="/project\login\index.php"><div class="button">SIGNIN</div></a>  </div> <?php }?>

    <div id="myHeader" class="logo_header"><div class="text"><a href="/project\home\index.php">LMS</a></div>
	
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

	 <?php if(!isset($_SESSION['userid'])) 

	{
		?> 
		
    <div class="himg"><div class="text"> 
	<h1 class="text-center">“I have always imagined <br> 
	that Paradise will be <br> a kind of library.”   
	</h1>
	<h2 class="text-right">― Jorge Luis Borges <h2>
     
<div class="boxx">	 <div class="button"><a href="/project\login\index.php"> SIGNIN </a> </div>	  
	  <div class="button"> <a href="/project\registration\index.php"> SIGNUP </a></div>       </div>

	   </div> 
	   </div> 
	   
	   <div class="box-feature"><div class="overlay"><h1 class="heading_bg"> Features </h1> 
	      <div class="feature_card"><h2 class="text-center"> Admin </h2> <hr> 
		  
		  <div class="text-left"> <ul>  

   <li> Admin </li>
    <li> Manage Books Category </li>
    <li> Manage Books </li>
    <li> Manage Librarian </li>
    <li> Manage Student </li>
	 <li> Manage Faculty </li>
    <li> Manage Booked Book </li>
    <li> Manage Return Book </li>

 </ul>  </div>

		  </div>
	      <div class="feature_card"><h2 class="text-center"> Student/Faculty </h2> <hr>
             
	
		   	  <ul>

   <li>  Register </li> 
   <li>  Login </li>
    <li> Search Book </li>
    <li> Issue Book </li>
    <li> Return Book </li>
    <li> Check Notification </li>
    <li> Update Profile </li>
   <li>  Return Password </li>

   </ul>
		  </div>
	      <div class="feature_card"><h2 class="text-center">  Librarian </h2> <hr> 
		  
			 <ul>
           

   <li> Manage Books Category </li>
   <li> Manage Books </li>
   <li> Manage Student </li>
   <li> Manage Faculty </li>
    <li> Booked Book </li> 
  <li>  Return Book </li>
   <li> Send Notification to Student </li>



           </u>
		  
		  </div>
	   
	   
	   </div>
	   </div>

    <?php }
   else
   {
	?>

	



                                  <div class="book_category" >		  
		
   <h1 class="heading_bg"><a href="/project/books"> Books </a></h1> 
   
   <div class="book_column_left">
       
	   <h1>Categories</h1>
	   <ul>
	         <a href="/project/home/"><li>All Books</li></a>
	        <a href="?cate=Math"> <li>Math</li      </a>
	         <a href="?cate=Physics"><li>Physics</li> </a>
	 <a href="?cate=Chemistry">    <li>Chemistry</li>    </a>
	 <a href="?cate=Biology">    <li>Biology</li>      </a>
	 <a href="?cate=History">    <li>History</li>       </a>
	 <a href="?cate=Geography">    <li>Geography</li>    </a>
	 <a href="?cate=Hindi">    <li>Hindi</li>         </a>
	 <a href="?cate=English">    <li>English</li>      </a>
	 <a href="?cate=Story Book">    <li>Story Book</li>   </a>
	 <a href="?cate=Novel">    <li>Novel</li>        </a>
	   </ul>
         
		 </div>
		 
		 
      <div class="book_column_right">
	  
	  <?php
	  if(!isset($_GET['cate']))
	  {
		  $cate='All Available ';
	  
	  $sql = "SELECT * FROM books WHERE AVAILABLE='0' ";
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
				
	<?php 	
  if($data['MEMBER_TYPE']=='lib' || $data['MEMBER_TYPE']=='admin')
  {
		?>
	<div class="members_div">
	                                                         <h1 class="heading_bg"> Students </h1> 
	 
	 <div class="content">
	 <?php 
	 
	 $sql = "SELECT * FROM members WHERE MEMBER_TYPE='stu' ";
	 $result = mysqli_query($con,$sql);
	 $count = mysqli_num_rows($result);
	
	 if(!$count==0)
	 {
	 
	 while($mem_data= mysqli_fetch_array($result))
	 {
		 $mpp = $mem_data['propic'];
		 
		 
		 ?>
		
		<a href="/project/profile/view_member.php?mem_id=<?php echo "".$mem_data['M_ID'].""; ?>">  
		
		<div class="mem_propic">
		 <div class="img1">
    <div class="img">
	<?php if(!$mpp == "") { ?>
	 <img src="/project/profile/propics/<?php

	echo "".$mem_data['propic'].""; ?>" alt="Profile_Picture" width="100%"height="auto" />  <?php } ?>
	
</div></div>  
<h2><?php

	echo "".$mem_data['FNAME']." ".$mem_data['LNAME']." "; ?></h2> </div> </a>



		 
		 
		 <?php
	 }
	 }
	 else
	 {
		 echo "No Member Found........";
	 }
	 
	 
	 
	 ?>
	 </div>
	</div> 
	
	
	
	<div class="members_div">
	                                                         <h1 class="heading_bg"> Faculties </h1> 
	 
	 <div class="content">
	 <?php 
	 
	 $sql = "SELECT * FROM members WHERE MEMBER_TYPE='fac' ";
	 $result = mysqli_query($con,$sql);
	 $count = mysqli_num_rows($result);
	
	 if(!$count==0)
	 {
	 
	 while($mem_data= mysqli_fetch_array($result))
	 {
		 $mpp = $mem_data['propic'];
		 
		 
		 ?>
		
		<a href="/project/profile/view_member.php?mem_id=<?php echo "".$mem_data['M_ID'].""; ?>">  
		
		<div class="mem_propic">
		 <div class="img1">
    <div class="img">
	<?php if(!$mpp == "") { ?>
	 <img src="/project/profile/propics/<?php

	echo "".$mem_data['propic'].""; ?>" alt="Profile_Picture" width="100%"height="auto" />  <?php } ?>
	
</div></div>  
<h2><?php

	echo "".$mem_data['FNAME']." ".$mem_data['LNAME']." "; ?></h2> </div> </a>



		 
		 
		 <?php
	 }
	 }
	 else
	 {
		 echo "No Member Found........";
	 }
	 
	 
	 
	 ?>
	 </div>
	</div> 
	
	<div class="members_div">
	                                                         <h1 class="heading_bg"> Librarian </h1> 
	 
	 <div class="content">
	 <?php 
	 
	 $sql = "SELECT * FROM members WHERE MEMBER_TYPE='lib' ";
	 $result = mysqli_query($con,$sql);
	 $count = mysqli_num_rows($result);
	
	 if(!$count==0)
	 {
	 
	 while($mem_data= mysqli_fetch_array($result))
	 {
		 $mpp = $mem_data['propic'];
		 
		 
		 ?>
		
		<a href="/project/profile/view_member.php?mem_id=<?php echo "".$mem_data['M_ID'].""; ?>">  
		
		<div class="mem_propic">
		 <div class="img1">
    <div class="img">
	<?php if(!$mpp == "") { ?>
	 <img src="/project/profile/propics/<?php

	echo "".$mem_data['propic'].""; ?>" alt="Profile_Picture" width="100%"height="auto" />  <?php } ?>
	
</div></div>  
<h2><?php

	echo "".$mem_data['FNAME']." ".$mem_data['LNAME']." "; ?></h2> </div> </a>



		 
		 
		 <?php
	 }
	 }
	 else
	 {
		 echo "No Member Found........";
	 }
	 
	 
	 
	 ?>
	 </div>
	</div> 
	 
				
   <?php
  }
  ?>
               </div>
			   










	<?php 
   }
		?>
	
	
	 	
	
	</div>
	
	
    <div class="footer text-center"> © Library Management System <br> 2017-2018 <br> All Rights Reserved.</div>

    </div> 
    <script>
    function hide()
    {
	document.getElementById("signin").style.display = "none";
	
	
    }
	
	
/* window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

	*/
	  
	  

    </script>       
    </body>
    </html>
