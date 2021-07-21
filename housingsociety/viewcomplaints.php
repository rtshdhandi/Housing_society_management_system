
<?php include("dbcon.php");?>
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
    <li class="nav-item">
      <a class="nav-link" href="charges.php">ADD CHARGES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="events.php">EVENTS</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link " href="viewcomplaints.php"> COMPLAINTS</a>
    </li>
	 <li class="nav-item ">
      <a class="nav-link  " href="maintanance.php"> MAINTANANCE</a>
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
	
	
			
	
	
	<div class="col-md-2">

	
		
	
	
		
			
			
		
</div>
 
	
	<div class="col-md-8">
		<form class="form-container" action="maintanance.php" method="POST">
		 <h3> Complaints</h3>
		<div class="row">
		
	<table class="table table-striped table-hover table-bordered">
		<thead>
		<tr class="bg-dark text-white text-center">
			
			<th> ID</th>
			<th> Date</th>
			<th>Complaint Type</th>
			<th>Complaint Description</th>
			
			<th>Complaint By</th>
			<th>Delete</th>
		</tr>
		</thead>
		<tbody>
		
	
			<?php 


	

	$query="Select * from complaint "; 
	$result=mysqli_query($con,$query);
	
	while ($row=mysqli_fetch_array($result)){
	?><tr>
	
	<td><?php echo $row['cid'] ?></td>
	<td><?php echo $row['cdate'] ?></td>
	<td><?php echo $row['type'] ?></td>
	<td><?php echo $row['cdescription'] ?></td>
	<td><?php echo $row['complaintby'] ?></td>
	<td><a onclick="return confirm('Are you sure?')" href="viewcomplaints.php?idd=<?php echo $row['cid'] ?>"  class="btn btn-danger">Delete</a></td>
	<?php
	if (isset($_GET['idd'])){
		$idd=$_GET['idd'];
		$query="Delete from complaint where cid='$idd'"; 
		$result=mysqli_query($con,$query);
		if($result){
		
		
		echo"<script>alert('Complaint deleted')</script>";
		
		echo "<script>window.open('viewcomplaints.php','_self')</script>";
		
		
		
		}
		else{
		
		
		echo"<script>alert('Failed')</script>";
		echo "<script>window.open('viewcomplaints.php','_self')</script>";
		
		
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

</div>
<script src="https://ajax.googleapi.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 

</body>
</html>