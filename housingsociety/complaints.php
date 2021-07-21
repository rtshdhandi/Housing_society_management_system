
<?php include("dbcon.php");?>
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
   
    <li class="nav-item">
      <a class="nav-link disabled" href="viewevents.php"> VIEW EVENTS</a>
    </li>
    <li class="nav-item active">
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
	

<div class="col-md-4"></div>	
			
	
	
	<div class="col-md-4">

	
		
	
	<div class="row">
	<div class="card-body" >		
		<form class="form-container" action="membercon.php" method="POST">
		
		<h3 > REGISTER COMPLAINT</h3>
		<div class="form-group">
			<label>Enter Date:</label>
			<input type="date" name="cdate" class="form-control" required><br>
		</div>
		<div class="form-group">
		
			
			<label>Enter Complaint Type:</label>
			
		
			<select name ="type"class ="form-control">
			<option name="type1" value="Security">Security</option>
			<option name="type2" value="Cleanliness">Cleanliness</option>
			<option name="type3" value="Parking">Parking</option>
			<option name="type4" value="Water">Water</option>
			<option name="type5" value="Electricity">Electricity</option>
			<option name="type6" value="Other">Other</option>
			
			</select><br>
</div>
		<div class="form-group">
			 <label>Enter Your Complaint:</label>
			<input type="text"  style=" height:150px;" name="cdescription" class="form-control" required /><br>
            .
         <br>
		</div>
		
		
			
			
			<input type="submit" name="csubmit" value="Register" class="btn btn-success">
			
			<br>
		</form>	

</form>
		</div>			   
	</div>
</div>
 
	
	
<script src="https://ajax.googleapi.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 

</body>
</html>