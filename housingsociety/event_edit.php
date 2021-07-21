

<html>
<head>
<title></title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link href="css/global.css" type="text/css" rel=" stylesheet"	>
</head>
<body style="background:url('images/8.jpg') no-repeat; background-size:cover;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container-fluid">


 <a class="navbar-brand" href="">ADMIN DASH</a>
 <nav class="nav navbar-nav">
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item active">
      <a class="nav-link" href="admin-panel.php">MEMBER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="charges.php">ADD CHARGES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="events.php">EVENTS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="viewcomplaints.php"> COMPLAINTS</a>
    </li>
	 <li class="nav-item">
      <a class="nav-link " href="maintanance.php"> MAINTANANCE</a>
    </li>
	
	 
	 <li class="nav-item">
      <a class="nav-link " href="admin_logout.php"> LOGOUT</a>
    </li>
  </ul>
  </nav>
  </div>
</nav>

<div class="row">

	<div class="col-md-4"></div>
	
	<div class="col-md-4">
<div class="container-fluid">	
	
	<div class="row">
	<div class="card-body" >		
		<form class="form-container" action="" method="POST">
		
		<h3 > EDIT EVENT</h3>
		<div class="form-group">
			<label>Event Name:</label>
			<input type="text" name="ename" class="form-control"><br>
		</div>
		<div class="form-group">
			<label>Event Date:</label>
			<input type="date" name="edate" class="form-control"><br>
		</div>
		<div class="form-group">
			<label>Event organizer:</label>
			<input type="text" name="eorganizer" class="form-control"><br>
			</div>
	
		
			
			
			<input type="submit" name="eventsubmit" value="EDIT" class="btn btn-primary">
			
			<br>
		</form>

	<?php
	$con=mysqli_connect("localhost","root","","my");

	
	if (isset($_POST['eventsubmit']))
	{
		$idd=$_GET['idd'];
		echo"$idd";
	$ename=$_POST['ename'];
	$edate=$_POST['edate'];
	$eorganizer=$_POST['eorganizer'];

	
	$query="UPDATE events SET ename = '$ename', edate = '$edate', eorganizer = '$eorganizer' WHERE eid = '$idd'";
	$res=mysqli_query($con,$query);
	if($res)
	{
		echo"<script>
						window.location.href='events.php';
						alert('Event edited');
						</script>";
	}
	else{
		echo"<script>
						window.location.href='events.php';
						alert('Event edit failed');
						</script>";
	}
	}
	?>
		</div>			   
	</div>
</div>
 
	
	
</div>

</div>
<script src="https://ajax.googleapi.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>