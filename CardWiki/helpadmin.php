<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Conflict</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="font/bootstrap-social.css"
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href=-"#">The Conflict</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
		<li><a href="homeadm.php">Home</a></li>
		<li><a href="logout.php"><font color=grey>Welcome, <?php echo $login_session; ?>: </font>Log Out?</a></li>
		<li><a href="addCards.php">Add Cards</a></li>
		<li class="active"><a href="help.html">Help</a></li>
		<li><a href="contactadmin.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <div class="jumbotron">
    <center><h1><b>Need Help?</b></h1></center>
  </div>

  <div class="row">
    <center>
	<div class="col-md-6">
		<p> <h3> Jofre Pinheiro</h3> <br/>
			 Email: jofrepinheiro@gmail.com <br/>
			 Phone: (309) 569 8495
		</p>
    </div>
	
	<div class="col-md-6">
		<p> <h3> Diego Abreu</h3> <br/>
			 Email: diegooabreu@gmail.com <br/>
			 Phone: (309) 569 8652
		</p>
    </div>
	</center>
  </div>
</div>

</body>
</html>
