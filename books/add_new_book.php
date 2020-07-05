 <html>
      <head>
	         <title> Add New Book - LMS - LIBARAY MANAGEMENT SYSTEM</title>
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
		if(isset($_GET['insert']))
		{
		$insert = $_GET['insert'];
		
		if($insert == 'true')
		{
			?>
   
   <div class='alert'>
  <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span> 
  </br>
    <strong style='text-align:center;'><h2>New Book Added</h2></strong> </br> 
	
      </div>
   <?php	
		}
		else
		{
		
		?>
   
   <div class='alert'>
  <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span> 
  </br>
    <strong style='text-align:center;'><h2>ERROR</h2></strong> </br> 
	<p style='text-align:center; font-size:18px;s'>Book Not Added</p>
      </div>
   <?php	

		}
		}
		?>
	   
		
		
		  <div class="new_book_box"> 
		  <h1 class="text-center">Add New Book</h1> <hr/>
		  
		  <div class="add_new_book_wrapper">
		 
		  <form method="post" action="Add_new_book_logic.php" enctype="multipart/form-data">
		   <input type="hidden" name="size" value="10000"/>
<input type="file" name="Image" required />
<input type="text" name="Title" id="capitalize" placeholder="Title"  required />
<input type="text" name="Author"   required  placeholder="Author" id="txtPassword"/>
<input type="text" name="Publisher"   required placeholder="Publisher"/>

<input type="text" name="Price"   required  placeholder="Price"/>
<input type="text" name="Quantity"  required  placeholder="Quantity (No. of Books)"/>

    <div class="date"><h3 class="float-left middle">Publish Date -  </h3><input type="date" name="Publish_Date"  required /></div>
    <div class="date"><h3 class="float-left middle">Category -  </h3><div class="styled-select slate">
  
  <select name="Category" required >
   <option value="Math">Math</option>
   <option value="Physics">Physics</option>
   <option value="Chemistry">Chemistry</option>
   <option value="Biology">Biology</option>
   <option value="History">History</option>
   <option value="Geography">Geography</option>
   <option value="Hindi">Hindi</option>
   <option value="English">English</option>
   <option value="Story Book">Story Book</option>
   <option value="Novel">Novel</option></select>

   </div></div>
 <div class="b_button">
<input type="submit" name="submit" value="Add"/> 
</div>

</form>
		       
			 </div>  </div>
		 
		 
		  
   
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
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   