


 <html>
        <head>
               <title>Sign Up - LMS - Library Management System</title>

              <link rel="icon" href="/project\Images\books-icon-2.png" type="image/gif">
              <link rel="stylesheet" href="\project/home/lms.css" type="text/css"/>
			  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="signup.css" type="text/css"/>
			  <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
 
	 
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

  <script type="text/javascript">
    function PhoneValidation() {
        var Inputphone = document.getElementById("phone").value;
		 var phoneno = /^\d{10}$/; 
	
        if(Inputphone.match(phoneno))  {
           
            return true;
        }
		 alert("Enter A 10-digits Valid Mobile No.(Without 0 or +91)");
        return false;
		
    }
</script>

	 
     	 </head>
  <body>
  <?php 
   
  	session_start();
   
   if(!isset ($_SESSION['userid']))
   {  

$show = "true";
$emailerr="false";
$con = mysqli_connect("localhost","root","");
 mysqli_select_db($con,'lms');
      
	  
	   if($_SERVER['REQUEST_METHOD']=='POST'){
    
		$sql = "select EMAIL from members";
	    $result = mysqli_query($con,$sql);
        $link = $_SERVER['PHP_SELF'];
	     while($emails = mysqli_fetch_assoc($result)){

			 $emailR = $emails['EMAIL'] ;
			 $emailC =$_POST['email'];
			 $emailC = strtolower($emailC);
			 if($emailR == $emailC){

				 $emailerr="true";
				 
			 }
		 }
	   }
	  
	 // database insertation Start here 
	  
 if($_SERVER['REQUEST_METHOD']=='POST'){
	$con = mysqli_connect("localhost","root","");
		if(!$con){
			echo "Server not Conncetd";
		}
		if(!mysqli_select_db($con,'lms')){
			echo "database not selected";
		}
 
		 if($emailerr=="false")
	{
		 
		 $fname = $_POST['fname'];                     //first name 
		$fname = ucwords($fname);
		
		$lname = $_POST['lname'];                      //last name
		$lname = ucwords($lname);
		$password = $_POST['pass1'];                   //password
		
		$email = $_POST['email'];                       //email
		$email = strtolower($email);
		
		$mobile = $_POST['phone'];                      //mobile number
        
		$add = $_POST['address'];                      //Address
		$add = ucwords($add);
		
		 $m_type = $_POST['member_type'];                //member_type
		 $C_date = date("Y-m-d");                         // current date
		 $e_y = date('Y');               
		 $e_y =$e_y+3;
		 $e_m = date('m');
		 $e_d = date('d');
		 
		// echo  "Fname = ",$fname," Lname = ",$lname,"Password =",$password,"Email = ",$email,"Adreess = ",$add;
		 
		 
		 $Expiry_date = $e_y."-".$e_m ."-".$e_d ;                  //expiry date
		 
		$ins =  "insert into members (FNAME,LNAME,PASSWORD,EMAIL,PHONE_NUMBER,ADDRESS,MEMBER_TYPE,MEMBER_DATE,EXPIRY_DATE)
		         values ('$fname','$lname','$password','$email','$mobile','$add','$m_type','$C_date','$Expiry_date')";
	
	 if(!mysqli_query($con,$ins)){
		echo "Data not Inserted" ;	
	}
	
	$sql = "select NOS from members where EMAIL='$email' ";
	$result = mysqli_query($con,$sql);
	$id = mysqli_fetch_array($result);
	$sql = "select NOS from members where EMAIL='$email' ";
	$result = mysqli_query($con,$sql);
	$id = mysqli_fetch_array($result);
	$id = $id['NOS'];
	if($m_type =="stu" )
	{
		$type = "Student";
		$active =  0;
	}
	
	if($m_type =="fac" )
	{
		$type = "Faculty";
		$active =  0;
	}
	if($m_type =="lib" )
	{
		$type = "Librarian";
		$active =  1;
	}

	$mt = $m_type."0".$id;                                       // Member_ID 
	$in =  "UPDATE members  SET M_ID = '$mt',TYPE = '$type',ACTIVE = '$active' WHERE members .EMAIL='$email' "; 
	mysqli_query($con,$in);
	}
 }

  

?> 

  
  <div class="container">


   <div class="logo_header"><div class="text"><a href="/project\home\index.php">LMS</a></div><a href="/project\contactus\index.php"><div class="button"><i class="fa fa-fax"></i> <br/>Contact</div>
   <a href="/project\aboutus\index.php"><div class="button"><i class="fa fa-file"></i> <br/>About Us</div>
   <a href="/project\home\index.php"><div class="button"><i class="fa fa-home"></i> <br/>Home</div></a></div>
   
   <?php 
   
if($_SERVER['REQUEST_METHOD']=='POST'){
			 
		if($emailerr == "true")	
		{			
			 
   ?>
   
   <div class='alert'>
  <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span> 
  </br>
  <strong style='text-align:center;'><h2>Error </h2></strong> </br> <p style='text-align:center; font-size:18px;s'>This Email id (<?php echo $emailC; ?>) is Already Registered.</p>
</div>
<?php			
			}
}      if($_SERVER['REQUEST_METHOD']=='POST'){
			 if($emailerr=="false")
			 {
				$show = "false";
				 
				 if($m_type !="lib" )
	{ 
				 echo "  <div class='wall_block'><div class='notice_block'> </br><h1>Thank You To SignUp </h1> </br>
 <h2>Your Library ID is : <u>$mt</u></h2> </br></br></br></br> <h3>Go To</h3></br> <h2>&darr; </h2></br> <a href='/project\login\index.php'><div class='notice_button'> Sign In</div></a></div></div>";
  
	}
  if($m_type =="lib" )
	{
	 echo "  <div class='wall_block'><div class='notice_block'> </br><h1>Thank You To SignUp </h1> </br>
 <h2>Your Library ID is : <u>$mt</u> <br>  </h2> </br><h3 style='color:black;'> Your Account is not Activated Yet, <br>You need Approval by Admin</h3></br></br></br> <h3>Go To</h3></br> <h2>&darr; </h2></br> <a href='/project\login\index.php'><div class='notice_button'> Sign In</div></a></div></div>";
 	
	}
   	
	
			 }
}
			 
	if($show =="true")
	{		
	
  ?>
   
<div class="wrapper">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];   ?>">
<input type="text" name="fname" id="capitalize" placeholder="First Name" required />
<input type="text" name="lname" id="capitalize" placeholder="Last Name"  required />
<input type="password" name="pass1"   required  placeholder="Password" id="txtPassword"/>
<input type="password" name="pass2"   required placeholder="Confirm_Password" id="txtConfirmPassword" onChange="return Validate();"/>

<input type="email" name="email" id="lowercase"  required  placeholder="username@domain.com"/>
<input type="text" name="phone"   required placeholder="Mobile_Number" id="phone" onChange="return PhoneValidation();"/>
<textarea  name="address"  required  rows="2" placeholder="Address" id="capitalize" ></textarea>
 <div class="b_button">
<input type="submit" name="submit" value="Sign Up"/> 
<div class="right">
<div class="styled-select slate">
   <select name="member_type" required >
   <option value="stu">Student</option>
   <option value="lib">Librarian</option>
   <option value="fac">Faculty</option></select> </div> </div></div>

</form>
<div class="wrap_foot"><div class="left-1">Already Have A Account ? </div><div class="right">
<a href="/project\login\index.php"><div class="button"> Sign In </div></a></div></div>


</div>
   <?php }  ?>

  
  
   <br/>  <br/>  <br/>
    <div class="footer text-center"> © Library Management System <br> 2017-2018 <br> All Rights Reserved.</div>
	
   <?php } 
    
	else 
	{
   ?>
    <div class='loader'> </div>
     <?php  
	header('Location:/project/profile/index.php');  }
	?>
	</div>
   </body></html>