
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
    <li class="nav-item">
      <a class="nav-link " href="viewcomplaints.php"> COMPLAINTS</a>
    </li>
	 <li class="nav-item active">
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
	
	
			
	
	
	<div class="col-md-1">

	
		
	
	
		
			
			
		
</div>
 
	
	<div class="col-md-10">
		<form class="form-container" action="maintanance.php" method="POST">
		 <h3> MAINTANANCE</h3>
		<div class="row">
			<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter room no"><br></div>
			<div class="col-md-2"><input type="submit"value=" Calculate" name="membersearch" class="btn btn-success"></div><div class="card-body"></div>
	<table class="table table-striped table-hover table-bordered">
		<thead>
		<tr class="bg-dark text-white text-center">
			<th>MONTH</th>
			<th>MEMBERID</th>
			<th>Roomno</th>
			
			<th>PerSquareFt</th>
			<th>Maintance</th>
			<th>Parking</th>
			<th>EventFund</th>
			<th>Water</th>
			<th>Electricity</th>
			<th>Total</th>
			
			
		</tr>
		</thead>
		<tbody>
		
	
			<?php 

if(isset($_POST['membersearch']))
{	
	$roomno=$_POST['search'];
	

	$que="Select * from addmember where roomno='$roomno'"; 
	
			
	$res=mysqli_query($con,$que);

	

	$query="Select * from charges"; 
	$result=mysqli_query($con,$query);
	
	while (($row=mysqli_fetch_array($result))&& ($row1=mysqli_fetch_array($res))){
	?><tr>
	<?php 
	if($row1['parking']=='Yes'){
	?>
	<td><?php echo $row['month'] ?></td>
	<td><?php echo $row1['memberid'] ?></td>
	<td><?php echo $row1['roomno'] ?></td>
	<td><?php echo $row['persquareft']* $row1['area'] ?></td>
	<td><?php echo $row['maintanance'] ?></td>
	<td><?php echo $row['parking'] ?></td>
	<td><?php echo $row['eventfund'] ?></td>
	<td><?php echo $row['water'] ?></td>
	<td><?php echo $row['electricity'] ?></td>
	<td><?php echo $row['electricity']+($row['persquareft']*$row1['area'])+$row['maintanance']+ $row['parking']+$row['eventfund']+ $row['water']  ?></td>
	
	<?php
	}
	elseif($row1['parking']=='No'){
	?>
	<td><?php echo $row['month'] ?></td>
	<td><?php echo $row1['memberid'] ?></td>
	<td><?php echo $row1['roomno'] ?></td>
	<td><?php echo $row['persquareft']* $row1['area'] ?></td>
	<td><?php echo $row['maintanance'] ?></td>
	<td><?php echo $row['parking']*0 ?></td>
	<td><?php echo $row['eventfund'] ?></td>
	<td><?php echo $row['water'] ?></td>
	<td><?php echo $row['electricity'] ?></td>
	<td><?php echo $row['electricity']+($row['persquareft']*$row1['area'])+$row['maintanance']+ $row['parking']*0+$row['eventfund']+ $row['water']  ?></td>
	
	<?php
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

</div>

<script src="https://ajax.googleapi.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 

</body>
</html>