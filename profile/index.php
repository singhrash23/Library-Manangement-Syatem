<html>
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
	
		
 <?php 
   
  	session_start();     
	if(isset ($_SESSION['userid']))
   {
	   
	
	if(!$_SESSION["userid"]==""){
	$ID = $_SESSION["userid"];
	
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
	 $target = "propics/".basename($_FILES['image']['name']); 
	 
		 
	 
	 $image = $_FILES['image']['name'];
	
	   $sql = "update members set propic ='$image' where M_ID='$ID' ";
	   
	    if(!mysqli_query($con,$sql))
		{
			echo "Not uploaded";
		}
		
		if(!move_uploaded_file($_FILES['image']['tmp_name'],$target)){
			
			echo "Not Moved";
		}
 
	}

	
	$sql = "select * from members where M_ID ='$ID' ";
	$result = mysqli_query($con,$sql);
	$data = mysqli_fetch_array($result);
	
	
   
	
	
}

       $pp = $data['propic'];
	
	   
  ?>
		
		
		        <div class="container">
    				<div class="wrapper">
				  
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
			

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2> Change Your profile Picture </h2> <br>
	<form id="change_pic" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>  " enctype="multipart/form-data">
     
	 <input type="hidden" name="size" value="10000"/>
	 <input type="file" name="image" required  /> <br/>
	
	<p> <input type="submit" name="upload" value="Upload"/> 
     

</form>

 
	
  </div>

</div>			


 
 



<div class="box-1">
	<div class="img1"><img id="myBtn" src="pr3.JPG" height="25" width="24"style="float:right"/>
	
	<div class="img">
	<?php if(!$pp == "") { ?>
	<a href="propics/<?php echo "".$data['propic'].""; ?> "><img src="propics/<?php

	echo "".$data['propic'].""; ?>" alt="Profile_Picture" width="100%"height="auto" /> </a>  <?php } ?>
	




	
</div></div>
	<div> <b><?php echo "".$data['FNAME']." ".$data['LNAME']." "; ?></b>    </div>
    <div id="text1">  Type : </div> <div id="text2"><?php echo "".$data['TYPE']." ";?></div>
	<div id="text1"> Email : </div> <div id="text2"><?php echo "".$data['EMAIL']." ";?></div>
	<div id="text1"> Mobile : </div> <div id="text2"><?php echo "+91".$data['PHONE_NUMBER']." ";?></div>
	<div id="text1"> Address : </div> <div id="text2"><?php echo "".$data['ADDRESS']." ";?></div>
   <div id="text1"> Registry : </div> <div id="text2"> <?php  $r_date = date('j F,Y',  strtotime($data['MEMBER_DATE']));     echo "".$r_date." ";?></div>
	

	
	
	<div class="btm"><a href="Logout.php"><div class="p_button">Log Out</div></a></div>
	</div>
	
	<?php 
	if($data['MEMBER_TYPE']=='stu' || $data['MEMBER_TYPE']=='fac')
	{
		
			$sql = "SELECT * FROM book_request where M_ID='$ID' ";
	$result = mysqli_query($con,$sql);
	 $Count = mysqli_num_rows($result);
	?>
	
	
	
  <div class="right_box"><div class="title">Books requested by you (<?php echo "$Count";?>) </div><div class="overlay">
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
			  <th>Available</th>
			  <th>Category</th>
			  <th colspan="2">Button</th>
			 
			  
		<tr></thead>
		
		
		<tbody>
		<?php 
		
		$sql = "SELECT * FROM `books` INNER JOIN `book_request` on book_request.B_ID = books.B_ID and book_request.M_ID='$ID'";
       $result = mysqli_query($con,$sql);
		
		while($data_value = mysqli_fetch_array($result))
		{
		 
		?>
		<tr>
	         
			
			 <td><?php echo "".$data_value['TITLE']." ";?></td>
			 <td><?php echo "".$data_value['AUTHOR']." ";?></td>
			 <td><?php echo "".$data_value['PUBLISHER']." ";?></td>
			<?php  if($data_value['AVAILABLE']==0)
		 { ?>
			 <td>Yes</td>
			<?php
		 }
            else 
			{   ?>
							 <td>No</td>

			<?php }		?>		
			
			 <td><?php echo "".$data_value['CATEGORY']." ";?></td>
			 <td><a href="/project/books/?book_id=<?php echo"".$data_value['B_ID']." ";?>"><button class="button-1">View Book</button></a></td>
			 <td><a href="/project/books/book_request_cancel.php?book_id=<?php echo"".$data_value['B_ID']." ";?>"><button class="button-1">Cancel</button></a></td>	
 			
			 
	    </tr>
		<?php 
		
		};
		?>
		</tbody>
	
</table>
   
	 <?php }
     else
	 {
	 echo "empty";}
	 ?>
  </div></div></div>
<?php         $sql = "SELECT * FROM book_borrow where BORROWED_BY='$ID' ";
	$result = mysqli_query($con,$sql);
	 $Count = mysqli_num_rows($result);

	 ?>
  <div class="right_box"><div class="title">Books borrowed by you  (<?php echo "$Count";?>)</div><div class="overlay">
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
			   <th>Category</th>
			   <th>Outstanding Date</th>
			   
			  <th colspan="2">Button</th>
			 
			  
		<tr></thead>
		
		
		<tbody>
		<?php 
		
		$sql = "SELECT * FROM `books` INNER JOIN `book_borrow` on book_borrow.B_ID = books.B_ID and book_borrow.BORROWED_BY='$ID'";
       $result = mysqli_query($con,$sql);
		
		while($data_value = mysqli_fetch_array($result))
		{
		 
		?>
		<tr>
	         
			<td> <?php  $i_date = date('j F, Y',  strtotime($data_value['ISSUE_DATE']));     echo "".$i_date." ";?></td>
			 <td><?php echo "".$data_value['TITLE']." ";?></td>
			 <td><?php echo "".$data_value['AUTHOR']." ";?></td>
			 <td><?php echo "".$data_value['PUBLISHER']." ";?></td>
			 <td>&#8377; <?php echo "".$data_value['PRICE']." ";?></td>
			 
			
			
			 <td><?php echo "".$data_value['CATEGORY']." ";?></td>
			  <td> <?php  $o_date = date('j F, Y',  strtotime($data_value['OUT_DATE']));     echo "".$o_date." ";?></td>
			 <td><a href="/project/books/?book_id=<?php echo"".$data_value['B_ID']." ";?>"><button class="button-1">View Book</button></a></td>
 			
			 
	    </tr>
		<?php 
		
		};
		?>
		</tbody>
	
</table>
   
	 <?php }
     else
	 {
	 echo "empty";}
	 ?>
  
  </div></div></div>
  			
	<?php } 
	
	if($data['MEMBER_TYPE']=='lib')
	{ 
       
	   	$sql = "SELECT * FROM book_request";
	$result = mysqli_query($con,$sql);
	 $Count = mysqli_num_rows($result);

?>
	
	 <div class="right_box"><div class="title">Books requested by members   (<?php echo "$Count";?>)</div><div class="overlay">
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
			  <th>Available</th>
			  <th>Name</th>
			  <th>Email</th>
			  <th>Type</th>
			  <th colspan="4">Buttons</th>
			 
			  
		<tr></thead>
		
		
		<tbody>
		<?php 
		
		$sql = "SELECT members.FNAME,members.M_ID,members.TYPE, members.LNAME, members.EMAIL,books.TITLE, books.AUTHOR,books.AVAILABLE, books.B_ID FROM ((books INNER JOIN book_request ON books.B_ID = book_request.B_ID) INNER JOIN members ON members.M_ID = book_request.M_ID)";
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
			 <td><?php echo "$b_aval";?></td>
			 <td><?php echo "".$data_value['FNAME']." ".$data_value['LNAME']." ";?></td>
			 <td><?php echo "".$data_value['EMAIL']." ";?></td>
			 <td><?php echo "".$data_value['TYPE']." ";?></td>
			 <td><a href="/project/books/?book_id=<?php echo"".$data_value['B_ID']." ";?>"><button class="button-1">View Book</button></a></td>
			 <td><a href="/project/profile/view_member.php?mem_id=<?php echo"".$data_value['M_ID']." ";?>"><button class="button-1">View Member</button></a></td>
			
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
		
		};
		?>
		</tbody>
	
</table>
   
	 <?php }
     else
	 {
	 echo "empty";}
	 
	 	$sql = "SELECT * FROM book_borrow";
	$result = mysqli_query($con,$sql);
	 $Count = mysqli_num_rows($result);
	
	 
	 ?>
	 
	 
	 
	  </div></div></div> <div class="right_box"><div class="title">Books borrowed by members  (<?php echo "$Count";?>)</div><div class="overlay">
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
			  <th>Name</th>
			  <th>Type</th>
			  <th>Outstanding Date</th>
			  <th colspan="3">Buttons</th>
			 
			  
		<tr></thead>
		
		
		<tbody>
		<?php 
		
		$sql = "SELECT book_borrow.ISSUE_DATE, book_borrow.OUT_DATE, members.FNAME,members.M_ID,members.TYPE, members.LNAME, members.EMAIL,books.TITLE,books.AUTHOR,books.B_ID FROM ((books INNER JOIN book_borrow ON books.B_ID = book_borrow.B_ID) INNER JOIN members ON members.M_ID = book_borrow.BORROWED_BY)";
       $result = mysqli_query($con,$sql);
		
		while($data_value = mysqli_fetch_array($result))
		{
		 ?>
		<tr>
	         
			<td> <?php  $i_date = date('j F, Y',  strtotime($data_value['ISSUE_DATE']));     echo "".$i_date." ";?></td>
			 <td><?php echo "".$data_value['TITLE']." ";?></td>
			 <td><?php echo "".$data_value['AUTHOR']." ";?></td>
			 <td><?php echo "".$data_value['FNAME']." ".$data_value['LNAME']." ";?></td>
			 <td><?php echo "".$data_value['TYPE']." ";?></td>
			 <td> <?php  $o_date = date('j F, Y',  strtotime($data_value['OUT_DATE']));     echo "".$o_date." ";?></td>
			 <td><a href="/project/books/?book_id=<?php echo"".$data_value['B_ID']." ";?>"><button class="button-1">View Book</button></a></td>
			 <td><a href="/project/profile/view_member.php?mem_id=<?php echo"".$data_value['M_ID']." ";?>"><button class="button-1">View Member</button></a></td>

		  <td><a href="/project/books/book_return_accept.php?book_id=<?php echo"".$data_value['B_ID']."";?>&mem_id=<?php echo"".$data_value['M_ID']." ";?>"><button  class="button-1">Return</button></a></td>	
			 
 			
			 
	    </tr>
		<?php 
		
		};
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
	if($data['MEMBER_TYPE']=='admin')
	{
	?>
	
  <div class="admin_right_box"><div class="title">Request For Approval </div><div class="overlay">
  <div class="data_value">
  
  <?php 
       $qry = "SELECT * FROM members WHERE MEMBER_TYPE = 'lib' and ACTIVE = '1'";
	   $result = mysqli_query($con,$qry);
	
	$sql = "SELECT * FROM members WHERE MEMBER_TYPE = 'lib' and ACTIVE = '1'";
	$result = mysqli_query($con,$sql);
	 $Count = mysqli_num_rows($result);
	 
	 if($Count!=0)
	 {
  
  ?>
 </table>                                                                                                                                                         
 <table id="t02">
  
     <thead>   <tr>
		    
			  <th>ID</th>
			  <th>Name</th>
			  <th>Email</th>
			  <th colspan="2">Button</th>
			 
			  
		<tr></thead>
		
		
		<tbody>
		<?php 
		while($data_value = mysqli_fetch_array($result))
		{
		
			
		?>
		<tr>
	         
			
			 <td><?php echo "".$data_value['M_ID']." ";?></td>
			 <td><?php echo "".$data_value['FNAME']." ".$data_value['LNAME']." ";?></td>	
			 <td><?php echo "".$data_value['EMAIL']." ";?></td>
			 <td><a href="acc_activation.php?mem_id=<?php echo"".$data_value['M_ID']." ";?>&accept=true"><button class="button-1">Accept</button></a></td>
			 <td><a href="acc_activation.php?mem_id=<?php echo"".$data_value['M_ID']." ";?>&deny=true"><button class="button-1">Deny</button></a></td>	
 			
			 
	    </tr>
		<?php 
		
		};
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
	  			
				
				
				
				<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

				
				
	         <div class="footer text-center"> © Library Management System <br> 2017-2018 <br> All Rights Reserved.</div>

		 
		 </div>
		 </div>
		 
		 
		 <?php 

} 
else
{
	header('location: /project\login\index.php' );

}

?>	


		      </body>
		
</html>



























