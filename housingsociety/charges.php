
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
    <li class="nav-item active">
      <a class="nav-link " href="charges.php">ADD CHARGES</a>
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

?>
<div class="row">
<div class="col-md-4"></div>
	
	
			
	
	
	<div class="col-md-4">

	
		
	
	<div class="row">
	<div class="card-body" >		
		<form class="form-container" action="addcharges.php" method="POST">
		
		<h3 > ADD CHARGES</h3>
		<div class="form-group">
			<label>Month:</label>
			<input type="text" name="month" class="form-control"><br>
		</div>
		
		<div class="form-group">
			<label>Per Squareft:</label>
			<input type="number" name="persquareft" class="form-control"><br>
		</div>
		
		<div class="form-group">
			<label>Maintanance:</label>
			<input type="number" name="maintanance" class="form-control"><br>
		</div>
		<div class="form-group">
			<label>Parking:</label>
			<input type="number" name="parking" class="form-control"><br>
			</div>
		
		<div class="form-group">
			
			<label>Event Fund:</label>
			<input type="number" name="eventfund" class="form-control"><br>
			</div>
		<div class="form-group">
			<label>Water:</label>
			<input type="number" name="water" class="form-control"><br>
			</div>
		<div class="form-group">
			<label>Electricity:</label>
			<input type="number" name="electricity" class="form-control"><br>
			</div>
		
			
			
			<input type="submit" name="chargesupdate" value="Update" class="btn btn-success btn-block"">
			
			<br>
		</form>	

</form>
		</div>			   
	</div>
</div>
 
	

	
	
			
			
		</tbody>
	</table>	
</div>

</div>
<script src="https://ajax.googleapi.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 

</body>
</html>