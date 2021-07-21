<?php
$con=mysqli_connect("localhost","root","","my");
if(isset($_POST['login_submit'])){
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from society where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		session_start();
		$_SESSION['username']=$_POST['username'];
		header("Location:admin-panel.php");
	}
	else
	{
		echo "<script>
		window.location.href='admin.php';
		alert('Enter Correct Details');
		</script>";
	}
}

		




if(isset($_POST['membersubmit']))
{
	
   
    
    $password=$_POST['password'];
	
	$cpassword=$_POST['cpassword'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	
	$roomno=$_POST['roomno'];
	$flat_type=$_POST['flat_type'];
	
	$area=$_POST['area'];
	$parking=$_POST['parking'];
	$contactno=$_POST['contactno'];
	$email=$_POST['email'];
	$query1 = $con->query("SELECT * FROM `addmember` WHERE `roomno` = '$roomno'");
	
	$check = $query1->num_rows;
		if($check == 1)
			{
				echo "<script>alert('RoomNO Has Already Been Added')</script>";	 
			}
		elseif($password != $cpassword)
		{
				echo "<script>alert('Passwords do not match')</script>";	 
			}
	else{
	$con->query ("insert into addmember (fname,lname,roomno,flat_type,area,parking,contactno,email,password)values('$fname','$lname','$roomno','$flat_type','$area','$parking','$contactno','$email','$password')") 
					or die(mysqli_error());	
					echo "<script>
						window.location.href='admin-panel.php';
						alert('member added');
						</script>";
	}
	
	




}
if(isset($_POST['eventsubmit']))
{
	
	$ename=$_POST['ename'];
	$edate=$_POST['edate'];
	
	$eorganizer=$_POST['eorganizer'];
	
	
	$query="insert into events (ename,edate,eorganizer)values('$ename','$edate','$eorganizer')";
	$result=mysqli_query($con,$query);
	if($result)
	{
	echo "<script>alert('Event added')</script>";
	echo "<script>window.open('events.php','_self')</script>";
	
	}
	else
		{
	echo "<script>alert('Event Not added')</script>";
	echo "<script>window.open('events.php','_self')</script>";
	
	}
	



}



	
		
?>