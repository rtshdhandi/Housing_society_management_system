
<?php
include('dbcon.php');


?>
<html>
<head>
<title></title>  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  
<link href="css/global.css" type="text/css" rel=" stylesheet"	>
</head>
<body style="background:url('images/8.jpg') no-repeat; background-size:cover;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container-fluid">


 <a class="navbar-brand" href="">ADMIN DASH</a>
 <nav class="nav navbar-nav">
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item ">
      <a class="nav-link" href="admin-panel.php">MEMBER</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="charges.php">ADD CHARGES</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link " href="events.php">EVENTS</a>
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

?>
<div class="container-fluid">
<div class="row">
	
	
			
	
	
	<div class="col-md-4">

	
		
	
	<div class="row">
	<div class="card-body" >		
		<form class="form-container" action="dbcon.php" method="POST">
		
		<h3 > ADD EVENT</h3>
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
	
		
			
			
			<input type="submit" name="eventsubmit" value="ADD" class="btn btn-primary">
			
			<br>
		</form>	

</form>
		</div>			   
	</div>
</div>
 
	
	<div class="col-md-8">
		<form class="form-container" action="event_search.php" method="POST">
		 <h3> Event Details</h3>
		<div class="row">
			<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter event organizer"></div>
			<div class="col-md-2"><input type="submit"value=" search" name="eventsearch" class="btn btn-primary"></div><div class="card-body"></div>
	<table class="table table-striped table-hover table-bordered">
		<thead>
		<tr class="bg-dark text-white text-center">
			
			<th>Event ID</th>
			<th>Event Name</th>
			<th>Event Date</th>
			<th>Event Organizer</th>
			
			<th>Edit</th>
			<th>Delete</th>
			
		</tr>
		</thead>
		<tbody>
			<?php 
		
	

	
	$query="Select * from events  "; 
	$result=mysqli_query($con,$query);
	
	while ($row=mysqli_fetch_array($result)){
	?><tr>
	
	<td><?php echo $row['eid'] ?></td>
	<td><?php echo $row['ename'] ?></td>
	<td><?php echo $row['edate'] ?></td>
	<td><?php echo $row['eorganizer'] ?></td>
	
	<td><a  href="event_edit.php?idd=<?php echo $row['eid'] ?>"  class="btn btn-warning">Edit</a></td>
	
	<td><a onclick="return confirm('Are you sure?')" href="events.php?idd=<?php echo $row['eid'] ?>"  class="btn btn-danger">Delete</a></td>
	</tr>
	<?php
	
	if (isset($_GET['idd'])){
		$idd=$_GET['idd'];
		$query="Delete from events where eid='$idd'"; 
		$result=mysqli_query($con,$query);
		if($result){
		
		
		echo"<script>alert('Event deleted')</script>";
		
		echo "<script>window.open('events.php','_self')</script>";
		
		
		
		}
		else{
		
		
		echo"<script>alert('Failed')</script>";
		echo "<script>window.open('events.php','_self')</script>";
		
		
		}
	}
	?>
	<?php

}	
	
	


?>
	
	
			
			
		</tbody>
	</table>	
</div>

</div>
<script src="https://ajax.googleapi.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 

</body>
</html>