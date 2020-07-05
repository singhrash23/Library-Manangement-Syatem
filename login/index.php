  <html>
        <head>
               <title>Sign In - LMS - Library Management System</title>

              <link rel="icon" href="/project\Images\books-icon-2.png" type="image/gif">
              <link rel="stylesheet" href="/project/home/lms.css" type="text/css">
			  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="signin.css" type="text/css">
			  <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
     
     	 </head>
  <body>
  <div class="container">
 <?php 
 session_start();
   
   if(!isset ($_SESSION['userid']))
   {
?>

   <div class="logo_header"><div class="text"><a href="/project\home\index.php">LMS</a></div><a href="/project\contactus\index.php"><div class="button"><i class="fa fa-fax"></i> <br/>Contact</div>
   <a href="/project\aboutus\index.php"><div class="button"><i class="fa fa-file"></i> <br/>About Us</div>
   <a href="/project\home\index.php"><div class="button"><i class="fa fa-home"></i> <br/>Home</div></a></div>
 
 <?php if(!isset($_POST['submit'])) { ?>
 <div class="wrapper">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">	
	 <div class="login-wrap">
	 <div>
	 <input type="username"  name="username" placeholder="Id or Email" required > 
	 </div>
	 
	 <div>
	 <input type="password"  name="password" placeholder="Password" required /> 
	 </div>
	 
    <div>
	  <div class="center"><input type="submit" name="submit" value="Login"/> 
	  </div>
	  </div>
	</form>
	
<div class="wrap_foot"><div class="left-1">Not Yet Account ? </div><div class="right">
<a href="/project\registration\index.php"><div class="button"> Sign Up </div></a></div></div>

</div></div>
  <?php } ?>
  
     
<?php 
      
	  $con = mysqli_connect("localhost","root","");
	  mysqli_select_db($con,'lms');
	   $link = $_SERVER['PHP_SELF'];
	   $pass="";
	  if($_SERVER['REQUEST_METHOD']=='POST')
	  {
		  
		  $username = $_POST['username'];
		  $password = $_POST['password'];
		  $user_ck ="";
		  $sql = "select M_ID,EMAIL from members";
		  $result = mysqli_query($con,$sql);
		  while($rows = mysqli_fetch_array($result))
		  {
			 $user_ck =$rows['M_ID'];
            if($username == $user_ck){
				$sql = "select * from members where M_ID ='$username'";
				$result = mysqli_query($con,$sql);
				$rows = mysqli_fetch_array($result);
				$pass =  $rows['PASSWORD'];
				$active =  $rows['ACTIVE'];
				$fname =  $rows['FNAME'];
				if($password == $pass)
				{  

                 if($active == 0)
					  
					  {
						  
			     //  echo "<div class='loader'> </div>";
					header('Location:/project/home/index.php'); 
					
					$_SESSION["userid"] = $username;
					echo "<div class='margin_down'> </div>";
					  }
				if($active == 1)
				{
				 echo " <div class='box-2'><div class='etext'><span><h1> Oops </h1> </span> <br/> Hi $fname <br> Your Account is not Activated Yet  <br/><br/>  <br/> ";
				             echo "</div><a href='$link'> <div class='e-button' id='left'> Log In </div>  </a>  <a href='#ForgetPassword'> <span class ='right1'> Forget Password ?  </span>  </a><a href='/home/signup/index.php'> <div class='e-button' id='right'> SignUp </div> </a>  </div> <div class='down_margin'></div> ";

	
				}
				if($active == 2)
				{
				 echo " <div class='box-2'><div class='etext'><span><h1> Oops </h1> </span> <br/> Hi $fname <br> Your Account is Blocked  <br/><br/>  <br/> ";
				             echo "</div><a href='$link'> <div class='e-button' id='left'> Log In </div>  </a>  <a href='#ForgetPassword'> <span class ='right1'> Forget Password ?  </span>  </a><a href='/home/signup/index.php'> <div class='e-button' id='right'> SignUp </div> </a>  </div> <div class='down_margin'></div> ";

	
				}	  
				}
				
			}
				$user_ck =$rows['EMAIL'];
            if($username == $user_ck){
				$sql = "select PASSWORD from members where EMAIL='$username'";
				$result = mysqli_query($con,$sql);
				$rows = mysqli_fetch_array($result);
				$pass =  $rows['PASSWORD'];
				if($password == $pass)
				{   
			      
				  if($active == 0)
					  
					  {
				  
			      $sql = "select M_ID from members where EMAIL='$username'";
				$result = mysqli_query($con,$sql);
				$rows = mysqli_fetch_array($result);
				$id =  $rows['M_ID'];
				  
				  
			       //echo "<div class='loader'> </div> ";
					header('Location: /project/home/index.php'); 
					
					$_SESSION["userid"] = $id;
					
					
				}
				
				if($active == 1)
				{
				 echo " <div class='box-2'><div class='etext'><span><h1> Oops </h1> </span> <br/> Hi $fname <br> Your Account is not Activated Yet  <br/><br/>  <br/> ";
				             echo "</div><a href='$link'> <div class='e-button' id='left'> Log In </div>  </a>  <a href='#ForgetPassword'> <span class ='right1'> Forget Password ?  </span>  </a><a href='/project/registration/index.php'> <div class='e-button' id='right'> SignUp </div> </a>  </div> <div class='down_margin'></div> ";

	
				}
				if($active == 2)
				{
				 echo " <div class='box-2'><div class='etext'><span><h1> Oops </h1> </span> <br/> Hi $fname <br> Your Account Activation Denied by Admin  <br/><br/>  <br/> ";
				             echo "</div><a href='$link'> <div class='e-button' id='left'> Log In </div>  </a>  <a href='#ForgetPassword'> <span class ='right1'> Forget Password ?  </span>  </a><a href='/home/signup/index.php'> <div class='e-button' id='right'> SignUp </div> </a>  </div> <div class='down_margin'></div> ";

	
				}
				
				}
				break;
				
				
			}
			 
		  }
		  
		  if($password != $pass)
		  {
			  echo " <div class='box-2'><div class='etext'><span><h1> Error </h1> </span> <br/> Username and Password Combination Wrong <br/><br/>  <br/>  ";
     
            echo "</div><a href='$link'> <div class='e-button' id='left'> Log In </div>  </a>  <a href='#ForgetPassword'> <span class ='right1'> Forget Password ?  </span>  </a><a href='/project/registration/index.php'> <div class='e-button' id='right'> SignUp </div> </a>  </div> <div class='down_margin'></div> ";
		  }
		  
		  
	  }
	
	
	
?>	  
  
  <br/>  <br/>
  <br/>

        <div class="footer text-center"> © Library Management System <br> 2017-2018 <br> All Rights Reserved.</div>
   <?php } 
    
	else 
	{
   ?>
   
      <?php  
	//header('Refresh: ; url=/project/profile/index.php');
	header('Location: /project/profile/index.php');
	}
	
	?>
	
   </div>
   </body></html>