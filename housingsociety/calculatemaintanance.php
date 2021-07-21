
<?php include("dbcon.php");?>

<?php
{	
function fetch_data()  
 {  
      $output = '';  
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
	?><td><?php echo $row1['memberid'] ?></td>
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

if(isset($_POST['print']))
	 require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
               
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
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }
 
?>  
