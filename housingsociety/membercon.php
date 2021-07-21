<?php
$con=mysqli_connect("localhost","root","","my");
if(isset($_POST['login_submit'])){
	session_start();
    $_SESSION['roomno']=$_POST['username'];
	$roomno=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from addmember where roomno='$roomno' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:member-panel.php");
	}
	else
	{
		echo "<script>
		window.location.href='members.php';
		alert('Enter Correct Details');
		</script>";
	}
}

if(isset($_POST['register_submit']))
{
	
	
	$roomno=$_POST['roomno'];
	
	$email=$_POST['email'];

	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	
	
	if($password == $password2)
	{
		$query="insert into registration (roomno,email,username,password)values('$roomno','$email','$username','$password')";
		mysqli_query($con,$query);
			echo "<script>
		window.location.href='member-panel.php';
		alert('Registration Successful');
		</script>";
	
	}
	elseif($password != $password2)
	{
		
			echo "<script>
		window.location.href='register.php';
		alert('Passwords do not match');
		</script>";
	}
	else
	{
		
			echo "<script>
		window.location.href='register.php';
		alert('Registration Failed');
		</script>";
	}
}
if(isset($_POST['csubmit']))
{
	session_start();
	
	$cdate=$_POST['cdate'];
	$type=$_POST['type'];
	
	$cdescription=$_POST['cdescription'];
	$complaintby=$_SESSION['roomno'];
	
	$query="insert into complaint (cdate,type,cdescription,complaintby)values('$cdate','$type','$cdescription','$complaintby')";
	$result=mysqli_query($con,$query);
	if($result)
	{
	echo "<script>alert('Complaint Registered')</script>";
	echo "<script>window.open('complaints.php','_self')</script>";
	
	}



}
?>