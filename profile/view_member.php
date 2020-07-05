
<html>
            	
 <?php 
 
    
   
  	session_start();     
	if(isset ($_SESSION['userid']))
   {
	
     	
	
	if(!$_SESSION["userid"]=="")     {
	$ID = $_SESSION["userid"];
	
	
	
	
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');
	
	

	
	$sql = "select * from members where M_ID ='$ID' ";
	$result = mysqli_query($con,$sql);
	$data = mysqli_fetch_array($result);
	
	
   if($data['MEMBER_TYPE']=='lib' || $data['MEMBER_TYPE']=='admin')
   {
	
	


       $pp = $data['propic'];
	
	   
  ?>
			
			
			





      <head>
	         <title> Profile - LMS - LIBARAY MANAGEMENT SYSTEM</title>
			 <link rel = "stylesheet" href = "profile.css" type = "text/css"/>
			 <link rel = "stylesheet" href = "/project\home\lms.css" type = "text/css"/>
			 <link rel = "stylesheet" href = "pro.css" type = "text/css"/>
			 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
              <link rel="icon" href="/project\Images\books-icon-2.png" type="image/gif">
			  <meta charset="utf-8">

		</head>
		
		<body>
	
	
		
		
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
 if(isset($_GET['mem_id']))
 {
	 $mem_id = $_GET['mem_id'];
 
 

 $sql = "select * from members where M_ID ='$mem_id' ";
	$result = mysqli_query($con,$sql);
	$mem_data = mysqli_fetch_array($result);
	
	$mem_status =  $mem_data['ACTIVE'];
	if($mem_status ==0)
	{
		$mem_status = 'Activated';
	}
   else
   {
	   $mem_status = 'Deactivated Or Blocked';
   }
	
     $mpp = $mem_data['propic'];
 
 
 ?>
 
 
 



<div class="div_center"><div class="box-1">
	<div class="img1">
	
	<div class="img">
	<?php if(!$mpp == "") { ?>
	<a href="propics/<?php echo "".$data['propic'].""; ?> "><img src="propics/<?php

	echo "".$mem_data['propic'].""; ?>" alt="Profile_Picture" width="100%"height="auto" /> </a>  <?php } ?>
	




	
</div></div>
  <br> <hr>
    <div id="view_member  ">  Name : <?php echo "".$mem_data['FNAME']." ".$mem_data['LNAME']." "; ?></div>
    <div id="view_member ">  Type : <?php echo "".$mem_data['TYPE']." ";?></div>
	<div id="view_member "> Email : <?php echo "".$mem_data['EMAIL']." ";?></div>
	<div id="view_member "> Mobile : <?php echo "+91".$mem_data['PHONE_NUMBER']." ";?></div>
	<div id="view_member "> Address : <?php echo "".$mem_data['ADDRESS']." ";?></div>
	<div id="view_member "> Status : <?php echo "$mem_status";?></div>
	<div id="view_member "> Registry : <?php echo "".$mem_data['MEMBER_DATE']." ";?></div>
      <div>
	  <?php 
	  if($mem_status=='Activated')
	  {
	  ?>
	  <a href ="block_member.php?mem_id=<?php echo "".$mem_data['M_ID'].""; ?>&block=true"><button class="block_btn">Block</button> </a>
	  <?php
	  
	  }
	  else{
	 	 ?>
		 	  <a href ="block_member.php?mem_id=<?php echo "".$mem_data['M_ID'].""; ?>&activate=true"><button class="block_btn">Activate</button> </a>

		 <?php
	  }
	  ?>
	  <a href ="delete_member.php?mem_id=<?php echo "".$mem_data['M_ID'].""; ?>">  <button class="block_btn">Delete</button></a></div>
	</div> 
	
		 
	
	</div>
	
		 <?php 
	
	if($data['MEMBER_TYPE']=='lib')
	{ 
       
	  $sql = "SELECT * FROM book_request where M_ID ='$mem_id' ";
	$result = mysqli_query($con,$sql);
	 $Count = mysqli_num_rows($result);

?>
	
	 <div class="right_box"><div class="title">Books requested by <?php echo "".$mem_data['FNAME']." ".$mem_data['LNAME']." "; ?>  (<?php echo "$Count";?>)</div><div class="overlay">
  <div class="data_value">
  
  <?php 
		
	 if($Count!=0)
	 {
  
  ?>
 </table>                                                                                                                                                         
 <table id="t02">
  
     <thead>   <tr>
		    
			  <th>Title</th>
			  <th>Author</th>
			  <th>Publisher</th>
			  <th>Date Published</th>
			  <th>Price</th>
			  <th colspan="3">Buttons</th>
			 
			  
		<tr></thead>
		
		
		<tbody>
		<?php 
		
		//$sql = "SELECT members.FNAME,members.M_ID,members.TYPE, members.LNAME, members.EMAIL,books.TITLE, books.AUTHOR,books.AVAILABLE, books.B_ID FROM ((books INNER JOIN book_request ON books.B_ID = book_request.B_ID) INNER JOIN members ON members.M_ID = book_request.M_ID )";
       		$sql = "SELECT * FROM `books` INNER JOIN `book_request` on book_request.B_ID = books.B_ID and book_request.M_ID='$mem_id'";

	   $result = mysqli_query($con,$sql);
		
		while($data_value = mysqli_fetch_array($result))
		{
		 if($data_value['AVAILABLE']==0)
		 {
			 $b_aval = 'Yes';
		 }
		 else{
			 $b_aval = 'No'; 
		 }
		?>
		<tr>
	         
			
			 <td><?php echo "".$data_value['TITLE']." ";?></td>
			 <td><?php echo "".$data_value['AUTHOR']." ";?></td>
			 <td><?php echo "".$data_value['PUBLISHER']." ";?></td>
			 <td><?php echo "".$data_value['DATE_PUBLISHED']." ";?></td>
			 <td><?php echo " ₹  ".$data_value['PRICE']." ";?></td>
			
			 <td><a href="/project/books/?book_id=<?php echo"".$data_value['B_ID']." ";?>"><button class="button-1">View Book</button></a></td>
			
			
			<?php  if($data_value['AVAILABLE']==0)
		 { ?> <td><a href="/project/books/book_request_accept.php?book_id=<?php echo"".$data_value['B_ID']."";?>&mem_id=<?php echo"".$data_value['M_ID']." ";?>"><button  class="button-1">Accept</button></a></td>	
			 
		 <?php } 
		 else 
		 {
	     ?>
		<td><a href="/project/books/book_request_accept.php?book_id=<?php echo"".$data_value['B_ID']."";?>&mem_id=<?php echo"".$data_value['M_ID']." ";?>"><button title="Book is Not Available" disabled  class="button-1">Accept</button></a></td>	
       
		 <?php }?>
		 
		 
			 
			 <td><a href="/project/books/book_request_cancel.php?book_id=<?php echo"".$data_value['B_ID']."";?>&mem_id=<?php echo"".$data_value['M_ID']." ";?>"><button class="button-1">Cancel</button></a></td>	
 			
			 
	    </tr>
		<?php 
		
		} ;
		?>
		</tbody>
	
</table>
   
	 <?php }
     else
	 {
	 echo "empty"; }
	 
	 	$sql = "SELECT * FROM book_borrow where BORROWED_BY ='$mem_id' ";
	$result = mysqli_query($con,$sql);
	 $Count = mysqli_num_rows($result);
	
	 
	 ?>
	 
	 
	 
	  </div></div></div> <div class="right_box"><div class="title">Books borrowed by <?php echo "".$mem_data['FNAME']." ".$mem_data['LNAME']." "; ?>  (<?php echo "$Count";?>)</div><div class="overlay">
  <div class="data_value">
  
  <?php 
	

	 if($Count!=0)
	 {
  
  ?>
 </table>                                                                                                                                                         
 <table id="t02">
  
     <thead>   <tr>
		    
		   	<th>Date</th>
			  <th>Title</th>
			  <th>Author</th>
			  <th>Publisher</th>
			  <th>Price</th>
			  <th>Outstanding Date</th>
			  <th colspan="2">Buttons</th>
			 
			  
		<tr></thead>
		
		
		<tbody>
		<?php 
		
		//$sql = "SELECT book_borrow.ISSUE_DATE, book_borrow.OUT_DATE, members.FNAME,members.M_ID,members.TYPE, members.LNAME, members.EMAIL,books.TITLE,books.AUTHOR,books.B_ID FROM ((books INNER JOIN book_borrow ON books.B_ID = book_borrow.B_ID) INNER JOIN members ON members.M_ID = book_borrow.BORROWED_BY)";
       		$sql = "SELECT * FROM `books` INNER JOIN `book_borrow` on book_borrow.B_ID = books.B_ID and book_borrow.BORROWED_BY='$mem_id'";

	   $result = mysqli_query($con,$sql);
		
		while($data_value = mysqli_fetch_array($result))
		{
		 ?>
		<tr>
	         
			<td> <?php  $i_date = date('j F, Y',  strtotime($data_value['ISSUE_DATE']));     echo "".$i_date." ";?></td>
			 <td><?php echo "".$data_value['TITLE']." ";?></td>
			 <td><?php echo "".$data_value['AUTHOR']." ";?></td>
			 <td><?php echo "".$data_value['PUBLISHER']." ";?></td>
			 <td><?php echo " ₹ ".$data_value['PRICE']." ";?></td>
			 <td> <?php  $o_date = date('j F, Y',  strtotime($data_value['OUT_DATE']));     echo "".$o_date." ";?></td>
			 <td><a href="/project/books/?book_id=<?php echo"".$data_value['B_ID']." ";?>"><button class="button-1">View Book</button></a></td>
			

		  <td><a href="/project/books/book_return_accept.php?book_id=<?php echo"".$data_value['B_ID']."";?>&mem_id=<?php echo"$mem_id";?>"><button  class="button-1">Return</button></a></td>	
			 
 			
			 
	    </tr>
		<?php 
		
		} ;
		?>
		</tbody>
	
</table>
   
	 <?php }
     else
	 {
	 echo "empty";}
	 ?>
	 
	  </div></div></div>			
	<?php } ?>
	 
	


	<?php
 }
 ?>
 
 <br/> <br/> <br/> <br/>
 
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
	 <img src="propics/<?php

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
	 <img src="propics/<?php

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
	 <img src="propics/<?php

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
	 
	 <div class="footer text-center"> © Library Management System <br> 2017-2018 <br> All Rights Reserved.</div>
	 
	 </div>
	 
 
 
 
 
 <?php 
	}
	else{
			header('location: /project\profile\index.php' );

	}
   }
   else
   {
			header('location: /project\profile\index.php' );

	}
   }
   
   else
   {
			header('location: /project\profile\index.php' );

	}
   
   ?>
  


  </body>
   </html>
   
  