<?php 
$con=mysqli_connect("localhost","root","","my");
if(isset($_POST['chargesupdate']))
{
	$month=$_POST['month'];
	$persquareft=$_POST['persquareft'];
	$maintainance=$_POST['maintanance'];
	$parking=$_POST['parking'];
	
	$eventfund=$_POST['eventfund'];
	$water=$_POST['water'];
	
	$electricity=$_POST['electricity'];
	$result = mysqli_query($con,"select count(1) FROM charges");
	$row = mysqli_fetch_array($result);

	$total = $row[0];
	if($total==0)
	{
	
	
	$query="INSERT INTO `charges` (`month`, `persquareft`, `maintanance`, `parking`, `eventfund`, `water`, `electricity`) VALUES ('$month', '$persquareft', '$maintainance', '$parking', '$eventfund', '$water', '$electricity');";

	
	$res=mysqli_query($con,$query);
	
		echo "<script>alert('Charges Inserted')</script>";
		echo "<script>window.open('charges.php','_self')</script>";
		
	
	}
	else
	{
		
	$query="UPDATE `charges` SET `month` = '$month',  `persquareft` = '$persquareft', `maintanance` = '$maintainance', `parking` = '$parking', `eventfund` = '$eventfund', `water` = '$water', `electricity` = '$electricity' ;";


	$res=mysqli_query($con,$query);
	
		echo "<script>alert('Charges Updated')</script>";
		echo "<script>window.open('charges.php','_self')</script>";
	
	

	}


}
?>