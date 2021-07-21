
<?php include("dbcon.php");?>
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
<?php
session_start();
if(isset($_SESSION['username'])) {
 
}
else
	 {
                header("location: admin.php");
        }



if( isset($_POST['membersearch']))
{
	$search=$_POST['search'];
	$query="select * from addmember where roomno='$search'";
	$result=mysqli_query($con,$query);
?>

<div class="container-fluid">
<div class="row">
	
	
			
	
	
	<div class="col-md-4">

	
		
	
	<div class="row">
	<div class="card-body" >		
		<form class="form-container" action="" method="POST">
		
		<h3 > ADD MEMBER</h3>
		<div class="form-group">
			<label>First Name:</label>
			<input type="text" name="fname" class="form-control" required><br>
		</div>
		<div class="form-group">
			<label>Last Name:</label>
			<input type="text" name="lname" class="form-control"required><br>
		</div>
		<div class="form-group">
			<label>Room No:</label>
			<input type="text" name="roomno" class="form-control" required><br>
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
		
			
			
			<input type="submit" name="membersubmit" value="ADD" class="btn btn-primary">
			
			<br>
		</form>	

</form>
		</div>			   
	</div>
</div>
 
	
	<div class="col-md-8">
		<form class="form-container" action="member_search.php" method="POST">
		 <h3> Member Details</h3>
		<div class="row">
			<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter room no"></div>
			<div class="col-md-2"><input type="submit"value=" search" name="membersearch" class="btn btn-primary"></div><div class="card-body"></div>
	<table class="table table-striped table-hover table-bordered">
		<thead>
		<tr class="bg-dark text-white text-center">
			
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>RoomNo</th>
			<th>Flat Type</th>
			<th>Area</th>
			<th>Contact</th>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
			
		</tr>
		</thead>
		<tbody>
			<?php 


	
	
	while ($row=mysqli_fetch_array($result)){
	?><tr>
	
	<td><?php echo $row['memberid'] ?></td>
	<td><?php echo $row['fname'] ?></td>
	<td><?php echo $row['lname'] ?></td>
	<td><?php echo $row['roomno'] ?></td>
	<td><?php echo $row['flat_type'] ?></td>
	<td><?php echo $row['area'] ?></td>
	
	<td><?php echo $row['contactno'] ?></td>
	<td><?php echo $row['email'] ?></td>
	<td><a  href="member_edit.php?idd=<?php echo $row['memberid'] ?>"  class="btn btn-warning">Edit</a></td>
	
	<td><a onclick="return confirm('Are you sure?')" href="admin-panel.php?idd=<?php echo $row['memberid'] ?>"  class="btn btn-danger">Delete</a></td>
	</tr>
	<?php
	
	if (isset($_GET['idd'])){
		$idd=$_GET['idd'];
		$query="Delete from addmember where memberid='$idd'"; 
		$result=mysqli_query($con,$query);
		if($result){
		
		
		echo"<script>alert('Member deleted')</script>";
		
		echo "<script>window.open('admin-panel.php','_self')</script>";
		
		
		
		}
		else{
		
		
		echo"<script>alert('Failed')</script>";
		echo "<script>window.open('admin-panel.php','_self')</script>";
		
		
		}
	}
	?>
	<?php

}
	
	
	
}

?>
	
	
			
			
		</tbody>
	</table>	
</div>

</div>
<script src="https://ajax.googleapi.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>