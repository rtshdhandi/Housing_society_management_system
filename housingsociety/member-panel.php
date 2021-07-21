
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
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="container-fluid">

		<form class="form-container" action="changepassword.php" method="POST">
		 <h3 align="center"> MY Profile</h3><br>
		 <div class="tab-content profile-tab" id="myTabContent">
		 <?php 


	
	$query="Select * from addmember where roomno='{$_SESSION['roomno']} '"; 
	$result=mysqli_query($con,$query);
	
	while ($row=mysqli_fetch_array($result)){
		?>
							
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Member Id :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['memberid'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['fname'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['lname'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Room No :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['roomno'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Flat Type </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['flat_type'] ?></p>
                                            </div>
                                        </div>
										 <div class="row">
                                            <div class="col-md-6">
                                                <label>Area in SqFt :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['area'] ?></p>
                                            </div>
                                        </div>
										 <div class="row">
                                            <div class="col-md-6">
                                                <label>Parking :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['parking'] ?></p>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <label>Email :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['email'] ?></p>
                                            </div>
                                        </div>
                            </div>
					</div>
                        <input type="submit" href="changepassword.php"  class="btn btn-success" name="change" value="Change Password"/>
                  
            <?php

}	

	
?>	              
</div>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapi.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 

</body>
</html>