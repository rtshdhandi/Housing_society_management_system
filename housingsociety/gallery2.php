<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
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
      <a class="nav-link active" href="gallery2.php">GALLERY</a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link  " href="members.php">MEMBER </a>
    </li>
	 <li class="nav-item">
      <a class="nav-link " href="admin.php">ADMIN </a>
    </li>
	
	 
	 
  </ul>
  </nav>
  </div>
</nav>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="container-fluid"><h3 align="center">GALLERY</h3>
<div class="card">
<div class="card-body">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
	<div class="carousel-item active">
      <img src="images/hall.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Hall</h3>
        <p>A grand and big Hall for Events and Meetings </p>
      </div>   
    </div>
	<div class="carousel-item ">
      <img src="images/pool.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Swimming Pool</h3>
        
      </div>   
    </div>
	<div class="carousel-item ">
      <img src="images/indoor.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Indoor Games Area</h3>
        <p>Includes Badminton Court,Snooker,Carroms,Shooting etc </p>
      </div>   
    </div>
    <div class="carousel-item ">
      <img src="images/play.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Children Play Area</h3>
        <p>Play Area for children to have  a great time </p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/gym..jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Gym</h3>
        <p> Fully Air-conditionedGym with new and advanced equipments</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/club.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Club House</h3>
        <p>Highly Grand Club house for Parties</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
