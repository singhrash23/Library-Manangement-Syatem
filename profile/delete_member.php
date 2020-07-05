<?php 


session_start();     
	if(isset ($_SESSION['userid']))
   {
	   
	
	if(!$_SESSION["userid"]=="")
	{
		
	$ID = $_SESSION["userid"];
	
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'lms');
	
	$sql = "select * from members where M_ID ='$ID' ";
	$result = mysqli_query($con,$sql);
	$data = mysqli_fetch_array($result);
	
	if($data['MEMBER_TYPE']=='lib')
	{
	
		if(isset($_GET['mem_id']))
		{
			$mem_id = $_GET['mem_id'];
		
		
		
	$sql = "DELETE FROM members WHERE M_ID='$mem_id';";
	 mysqli_query($con,$sql);
	 header('location: /project\profile\view_member.php' );
	
		}
		
   }
    else
{
	

	header('location: /project\profile\index.php' );

}
	}
   }
?>