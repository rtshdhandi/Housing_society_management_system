<!DOCTYPE html>
<html >
<head>

    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="css/global.css" type="text/css" rel=" stylesheet"	>
</head>
<body style="background:url('images/8.jpg') no-repeat; background-size:cover;">	
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container-fluid" >
<a class="navbar-brand" href="">MY HOUSING SOCIETY</a>
 <nav class="nav navbar-nav">
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item ">
      <a class="nav-link" href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="gallery2.php">GALLERY</a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link active " href="members.php">MEMBER </a>
    </li>
	 <li class="nav-item">
      <a class="nav-link disabled" href="admin.php">ADMIN </a>
    </li>
	
	 
	 
  </ul>
  </nav>
  </div>
</nav>

<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">


	<form class="form-container";" method="post" action="membercon.php">
	<h1 > MEMBER LOGIN</h1>
	<div class="form-group">
                
                  <label>Room No: </label><br>
				
                  <input type="text" name="username" class="form-control" placeholder="enter username" required ><br>
    </div> 
	<div class="form-group">	
				  <label>Password: </label>
                  <input type="password" class="form-control" name="password" placeholder="enter password" required ><br>
	</div>	
	
				  <input type="submit"  name="login_submit" class="btn btn-success btn-block"><br>
				 
				  

	</form>
</div>
</div>
</div>	
				
				
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>		