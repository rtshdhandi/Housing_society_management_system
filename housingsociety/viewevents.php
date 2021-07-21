
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


  <a class="navbar-brand" href="">MEMBER PANEL</a>
 <nav class="nav navbar-nav">
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item ">
      <a class="nav-link" href="member-panel.php">VIEW PROFILE</a>
    </li>
   
    <li class="nav-item active">
      <a class="nav-link " href="viewevents.php"> VIEW EVENTS</a>
    </li>
    <li class="nav-item ">
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
  echo "Your session is running " . $_SESSION['roomno'];
}
else
	 {
                header("location: members.php");
        }
?>
<div class="container-fluid">
<div class="row">
	
	
			
	
	
	<div class="col-md-2"></div>
 
	
	<div class="col-md-8">
		<form class="form-container" action="member_search.php" method="POST">
		 <h3> Event Details</h3>
		<div class="row">
			<div class="card-body"></div>
	<table class="table table-striped table-hover table-bordered">
		<thead>
		<tr class="bg-dark text-white text-center">
			
			<th>Event ID</th>
			<th>Event Name</th>
			<th>Event Date</th>
			<th>Event Organizer</th>
			
			
		</tr>
		</thead>
		<tbody>
			<?php 


	
	$query="Select * from events "; 
	$result=mysqli_query($con,$query);
	
	while ($row=mysqli_fetch_array($result)){
	?><tr>
	
	<td><?php echo $row['eid'] ?></td>
	<td><?php echo $row['ename'] ?></td>
	<td><?php echo $row['edate'] ?></td>
	<td><?php echo $row['eorganizer'] ?></td>
	
	
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