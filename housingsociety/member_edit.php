

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
		
		<h3 > EDIT MEMBER</h3>
	
		<div class="form-group">
			<label>First Name:</label>
			<input type="text" name="fname" class="form-control" required><br>
		</div>
		<div class="form-group">
			<label>Last Name:</label>
			<input type="text" name="lname" class="form-control"required><br>
		</div>
		
		<div class="form-group">
			<label>Flat Type: </label>
			<input type="radio" name="flat_type" value="1BHK" checked> 1BHK
			<input type="radio" name="flat_type" value="2BHK"> 2BHK<br>
			</div>
		<div class="form-group">
			
			<label>Area in Sqft:</label>
			<input type="text" name="area" class="form-control required"><br>
			</div>
		<div class="form-group">
		<label>Parking: </label>
			<input type="radio" name="parking" value="Yes" checked> Yes
			<input type="radio" name="parking" value="No"> No<br>
			</div>
			
			
		
		<div class="form-group">
			<label>Contact No:</label>
			<input type="text" name="contactno" class="form-control" required><br>
			</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="text" name="email" class="form-control" required><br>
			</div>
		
			
			
			<input type="submit" name="membersubmit" value="Edit" class="btn btn-primary">
			
			<br>
		</form>

	<?php
	$con=mysqli_connect("localhost","root","","my");

	
	if (isset($_POST['membersubmit']))
	{
		$idd=$_GET['idd'];
	echo"$idd";
		

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	
	
	$flat_type=$_POST['flat_type'];
	
	$area=$_POST['area'];
	$parking=$_POST['parking'];
	$contactno=$_POST['contactno'];
	$email=$_POST['email'];
	$query="UPDATE addmember SET fname = '$fname', lname = '$lname', flat_type = '$flat_type', area = '$area', parking = '$parking', contactno = '$contactno', email = '$email' WHERE memberid = '$idd'";
	$res=mysqli_query($con,$query);
	if($res)
	{
		echo"<script>
						window.location.href='admin-panel.php';
						alert('member edited');
						</script>";
	}
	else{
		echo"<script>
						window.location.href='admin-panel.php';
						alert('member edit failed');
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