  <html>
        <head>
               <title>Contact Us - LMS - Library Management System</title>

              <link rel="icon" href="/project\Images\books-icon-2.png" type="image/gif">
              <link rel="stylesheet" href="/project/home/lms.css" type="text/css"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="contact.css" type="text/css"/>
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

   <div class="contact_us_bg">
			   </div>
			   
			   
			    <div class="text-right">
				<br><br><br><br><br><br>
				<h1><strong>You Have a Question or a Comment</strong><em>– We know that sometimes its tough to find the <br>infomation you need. SO, ASK!</em></br> </h1></div>



<div class="cls1">
<div class="div_center">

<form>
<div id="con">
<input type="text" name="Name" placeholder="Name" required="required"/>
</div>
<div id="con">
<input type="email" name="Email" placeholder="Email"required="required"/>
</div>

<div id="con">
<input type="text" name="Subject" placeholder="Subject" required="required"/>
</div>
<div id="con">
<textarea required  rows="4" placeholder="messages"></textarea>
</div>	

<div id="con"> 
<input type="Submit" name="Submit" value="Submit Your Query">
</div>	

</div>				
	  
	
	
    <div class="footer text-center"> © Library Management System <br> 2017-2018 <br> All Rights Reserved.</div>

    </div>
   </body></html>