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
	
	if($data['MEMBER_TYPE']=='admin')
	{
		if(isset($_GET['mem_id']))
		{
			$m_id = $_GET['mem_id'];
		}
		if(isset($_GET['accept']))
		{
			$accept = $_GET['accept'];
			if($accept=="true")
		{
		
	$sql = "update members set ACTIVE = 0 where M_ID = '$m_id' ";
	 mysqli_query($con,$sql);
	 header('location: /project\profile\index.php' );
	
		}
		}
		if(isset($_GET['deny']))
		{
			$deny = $_GET['deny'];
			if($deny=="true")
		{
		
	$sql = "update members set ACTIVE = 2 where M_ID = '$m_id' ";
	 mysqli_query($con,$sql);
	 header('location: /project\profile\index.php' );
	
		}
		}
		
		
		
	
	
	}
	}
   }
    else
{
	

	header('location: /project\profile\index.php' );

}
?>