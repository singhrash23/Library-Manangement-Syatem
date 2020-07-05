  <html>
        <head>
               <title>About Us - LMS - Library Management System</title>

              <link rel="icon" href="/project\Images\books-icon-2.png" type="image/gif">
              <link rel="stylesheet" href="/project/home/lms.css" type="text/css"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="aboutus.css" type="text/css"/>
			  <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
     
     	 </head>
  <body>
  


<?php 
	session_start();
	
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
    <div id="signin" class="sign_header" >  <a href="/project\registration\index.php"><div class="button">SIGNUP</div></a>
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

      <div class="about_us_bg">
	 
	    </div>
		
    <div class="text-cls">  <div class="text-left"> 
	<br>
		
		
	  <h1 class="heading_bg"> About Us </h1> </div>
	<br><br>
	<h3> 
	<p><em>Library Management System is a  Application  used to manages the catalog of a library.   It helps to keep the records of whole transactions of the books available in the library.
	   Our Provided Library Management System which is very easy to use and fulfills all the requirement of a librarian. <br> <br> There are many features which helps librarian to keep records of available books as well as issued books. This software is available in both mode i.e. web-based or local host based. <br><br>We provide best Library Management System of this planet.  Library Management System (LMS) is a web based solution which is Developed on Latest Technology Focused Towards Automating the vital Activities of the Library.
	   </h3> </em> </p> <h2> <div class="text-right">-LMS Team<div></h2> </div>
 
	  
	
	    <div class="footer text-center"> © Library Management System <br> 2017-2018 <br> All Rights Reserved.</div>


    </div>
   </body></html>