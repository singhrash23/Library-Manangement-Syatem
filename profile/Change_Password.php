 <html>
        <head>
               <title>Change Password - LMS - Library Management System</title>

              <link rel="icon" href="/project\Images\books-icon-2.png" type="image/gif">
              <link rel="stylesheet" href="/project/home/lms.css" type="text/css">
			  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="/project/login/signin.css" type="text/css">
			  <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
   
   
   <style>
   .alert {
    padding: 10px;
    height:7em;
	width:42em;
    background-color: #f44336;
    color: white;
	margin:10px 0px 0px 20em;
	padding:10px 10px 20px 10px;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}
.closebtn:hover {
    color: black;
}

   
   </style>
   
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
	
	 ?>

  <div class="container">


   <div class="logo_header"><div class="text"><a href="/project\home\index.php">LMS</a></div>
   
   <?php if(isset($_SESSION['userid'])) 
		
		{
			 $pp = $data['propic'];
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
 
      if($_SERVER['REQUEST_METHOD']=='POST')
	  {
		  $oldpasswod = $data['PASSWORD'];
		  $entered_current_password = $_POST['current_password'];
		  $new_password = $_POST['new_password'];
		  $confirm_new_password = $_POST['confirm_new_password'];
		 

		 if( $oldpasswod == $entered_current_password)
			 
			 {
			  
			 if($new_password == $confirm_new_password)
			  
			 {
				if($oldpasswod != $new_password)  
				  
				  {
				  
				 $sql = "UPDATE members set PASSWORD = '$new_password' where M_ID ='$ID'";
				 mysqli_query($con,$sql);
				 
				?>      <div class='alert'>
  <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span> 
  </br>
  <strong style='text-align:center;'><h2>Password Changed Successfully </h2></strong> </br> 
</div> 
	 <?php 
			  }
			  
			  else
			  {
				 ?>      <div class='alert'>
  <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span> 
  </br>
  <strong style='text-align:center;'>  <h2> Your New Password Same as Old/Current Password  </h2></strong> </br> 
  
</div> 
	 <?php  
			  }
			  
			 }
			  
			  else
			  {
				  
				?>      <div class='alert'>
  <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span> 
  </br>
  <strong style='text-align:center;'><h1>Error</h1> </br> <h2> New Password And Confirm New Password not Match  </h2></strong> </br> 
</div> 
	 <?php    
				  
			  }
			  
		  }
	      
		 else
			 
			 {
				 
			?>      <div class='alert'>
  <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span> 
  </br>
  <strong style='text-align:center;'><h1>Error</h1> </br> <h2> Entered Current password is Wrong  </h2></strong> </br> 
</div> 
	 <?php    	 
				 
				 
			 }
			 
	  }
		  
	 
?>
 
 
 
 
 <div class="wrapper">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">	
	 <div class="login-wrap">
	 <div>
	 <input type="password"  name="current_password" placeholder="Current Password" required /> 
	 </div>
	 
	 <div>
	 <input type="password" id="txtPassword"  name="new_password" placeholder="New Password" required /> 
	 </div>
	 <div>
	 <input type="password" id="txtConfirmPassword" onChange="return Validate();"  name="confirm_new_password" placeholder="Confirm New Password" required /> 
	 </div>
	 
    <div>
	  <div class="center"><input type="submit" name="submit" value="Change"/> 
	  </div>
	  </div>
	</form>
	


</div></div>
  
  
  
  
        <div class="footer text-center"> © Library Management System <br> 2017-2018 <br> All Rights Reserved.</div>
   
	
	   
 <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
	
   </div>
   
     <?php 
   
   }
   
   else
   {
	   ?>
   
    <div class='loader'> </div>  <?php  
	header('Refresh: 2; url=/project/profile/index.php');  }
   
    ?>
   </body></html>