
<?php include("membercon.php");
 ?>
<html>
<head>
<title></title>  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  
<link href="css/global.css" type="text/css" rel=" stylesheet"	>
</head>
<body style="background:url('images/8.jpg') no-repeat; background-size:cover;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container-fluid">


 <a class="navbar-brand" href="">MEMBER PANEL</a>
 <nav class="nav navbar-nav">
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item active">
      <a class="nav-link" href="member-panel.php">VIEW PROFILE</a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link " href="viewevents.php"> VIEW EVENTS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="complaints.php"> COMPLAINT</a>
    </li>
	 <li class="nav-item">
      <a class="nav-link " href="mymaintanance.php">VIEW MAINTANANCE</a>
    </li>
	
	 
	 <li class="nav-item">
      <a class="nav-link " href="memberlogout.php"> LOGOUT</a>
    </li>
  </ul>
  </nav>
  </div>
</nav>
<?php
session_start();
if(isset($_SESSION['roomno'])) {
  echo "";
}
else
	 {
                header("location: members.php");

	 }
	 ?>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="container-fluid">

		<form class="form-container" action="changepassword.php" method="POST">
		 <h3 align="center"> Change Password</h3><br>
		 <div class="form-group">
                
                  <label>Enter Current Password: </label><br>
				
                  <input type="password" name="current" class="form-control" placeholder="enter current password" required ><br>
    </div> 
	<div class="form-group">	
				  <label>Enter New Password: </label>
                  <input type="password" class="form-control" name="new" placeholder="enter new password" required ><br>
	</div>
	<div class="form-group">	
				  <label>Confirm Password : </label>
                  <input type="password" class="form-control" name="new2" placeholder="enter new password" required ><br>
	</div>	
	
				  <input type="submit"  name="submit" class="btn btn-success btn-block"><br>
				 
				  

	</form>
		 
<?php					

	
if(isset($_POST['submit']))
{
	$query="Select * from addmember "; 
	$result=mysqli_query($con,$query);
	
	while ($row=mysqli_fetch_array($result)){
	$current=$_POST['current'];
	$new=$_POST['new'];
	$new2=$_POST['new2'];
	if(($current==$row['password']) && ($new==$new2))
	{
		$sql = "UPDATE addmember SET password='$new' WHERE roomno='{$_SESSION['roomno']} '";
		$res=mysqli_query($con,$sql);
		if($res)
			{
				echo "<script>
						window.location.href='member-panel.php';
						alert('Password Changed');
						</script>";
			}
			else{
				echo "<script>
						window.location.href='member-panel.php';
						alert('Failed To Change Password');
						</script>";
			}
	}
	}
}
	
?>	              

</div>
</div>
</div>
<script src="https://ajax.googleapi.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 

</body>
</html>