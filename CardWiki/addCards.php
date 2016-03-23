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
		<li class="active"><a href="addCards.php">Add Cards</a></li>
		<li><a href="helpadmin.php">Help</a></li>
		<li><a href="contactadmin.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
	  <div class="jumbotron">
		<center><h1><b>Administrator - Add Card</b></h1></center>
	  </div>

	<div class="col-sm-12">
		<form id="addCards" enctype="multipart/form-data" method="POST" class="form-signin" action="processCard.php">
			<div class="form-group">
				<label for="name" >Card Name:</label>
				<input type="text" id="name" name="name" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="description" >Card Description:</label>
				<input type="text" id="description" name="description" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="attack" >Attack:</label>
				<input type="attack" id="attack" name="attack" class="form-control">
				
				<label for="health" >Health:</label>
				<input type="health" id="health" name="health" class="form-control">
				
				<label for="cost" >Cost:</label>
				<input type="cost" id="cost" name="cost" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="picture">Card Image:</label>
				<input type="file" id="picture" name="picture" class="form-control">
			</div>
			<div class="form-group">
				<input class="btn btn-lg btn-primary btn-block" value="Register Card" type="submit"/>
			</div>
		</form>
	</div>
</div>

</body>
</html>
