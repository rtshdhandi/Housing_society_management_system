<?php 
 session_start();
 if(!isset($_SESSION['roomno']))
 {
	 header("location:members.php");
 }
 function fetch_data()  
 {
	 
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "my");  
      $sql = "SELECT * FROM addmember where roomno='{$_SESSION['roomno']}'";  
      $result = mysqli_query($connect, $sql);
	  $sql1 = "SELECT * FROM charges";  
      $result1 = mysqli_query($connect, $sql1);	
      while(($row = mysqli_fetch_array($result))  && ($row1 = mysqli_fetch_array($result1)))
      {
	  if($row['parking']=='Yes')
	  {
      $output .= '<tr>  
						  <td>'.$row1["month"].'</td>
                          <td>'.$row["memberid"].'</td>  
                          <td>'.$row["roomno"].'</td>
						  <td>'.$row1["persquareft"]*$row["area"].'</td>
						  <td>'.$row1["maintanance"].'</td>						  
                          <td>'.$row1["parking"].'</td> 
						  <td>'.$row1["water"].'</td>
						  <td>'.$row1["electricity"].'</td>  
						  <td>'.$row1["eventfund"].'</td>
						  <td>'.($row1["persquareft"]*$row["area"] + $row1["water"] + $row1["parking"] + $row1["electricity"] + $row1["eventfund"] + $row1["maintanance"]).'</td>
                         
                     </tr>  
                          ';  
      }
	  elseif($row['parking']=='No')
	  {
      $output .= '<tr>  
						  <td>'.$row1["month"].'</td>
                          <td>'.$row["memberid"].'</td>  
                          <td>'.$row["roomno"].'</td>
						  <td>'.$row1["persquareft"]*$row["area"].'</td>
						  <td>'.$row1["maintanance"].'</td>						  
                          <td>'.$row1["parking"]*0 .'</td> 
						  <td>'.$row1["water"].'</td>
						  <td>'.$row1["electricity"].'</td>  
						  <td>'.$row1["eventfund"].'</td> 
						  <td>'.($row1["persquareft"]*$row["area"] + $row1["water"] + $row1["parking"]*0 + $row1["electricity"] + $row1["eventfund"] + $row1["maintanance"]).'</td>
                         
                     </tr>  
                          ';  
      }
	  }	  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT,  array(400, 352), true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("MY HOUSING SOCIETY BILL");  
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
      <h3 align="center">MY HOUSING SOCIETY</h3><br><br>  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr> 
				<th>MONTH</th>
                <th>MEMBERID</th>  
                <th>ROOM NO</th>  
                <th>PER SQUARE FT</th>  
                <th>MAINTANANCE</th>  
                <th>PARKING</th> 
				<th>WATER</th>
				<th>ELECTRICITY</th> 
				<th>EVENT FUND</th>
				<th>TOTAL</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
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
           <li class="nav-item ">
           <a class="nav-link " href="complaints.php"> COMPLAINT</a>
           </li>
	       <li class="nav-item active">
		   <a class="nav-link " href="mymaintanance.php">VIEW MAINTANANCE</a>
           </li>
	       <li class="nav-item">
           <a class="nav-link " href="memberlogout.php"> LOGOUT</a>
           </li>
          </ul>
         </nav>
         </div>
         </nav> 
           <div class="container-fluid">  
		   <div class="row">
	       <div class="col-md-2"></div>	
		   <div class="col-md-8">
		   <div class="row">
	       <div class="card-body" >
		   <form class="form-container" action="" method="POST">		   
                <h3 align="center">MY MAINTANANCE</h3><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> 
							   <th>MONTH</th> 
							   <th>MEMBERID</th>  
							   <th>ROOM NO</th>  
							   <th>PER SQUARE FT</th>  
                               <th>MAINTANANCE</th>  
                               <th>PARKING</th> 
				               <th>WATER</th>
				               <th>ELECTRICITY</th> 
				               <th>EVENT FUND</th>
                               <th>TOTAL</th>
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>  
                </div>
		   </div>
		   </div>
		   </div>
           </div>  
      </body>  
 </html>  