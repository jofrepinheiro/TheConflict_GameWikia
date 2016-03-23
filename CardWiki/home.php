<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Conflict - <?php echo $login_session; ?></title>
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
        	<li class="active"><a href="home.php">Home</a></li>
		<li><a href="logout.php"><font color=grey>Welcome, <?php echo $login_session; ?>: </font>Log Out?</a></li>
		<li><a href="helpuser.php">Help</a></li>
		<li><a href="contactuser.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <div class="jumbotron">
    <center><h1><b>The Conflict - Game Wikia </b></h1></center>
  </div>

  <div class="row">
    <div class="col-sm-4">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <a href="http://www.google.com"> <img src="img/cards/card_shazam.jpg" alt="Shazam Card"></a>
			</div>

			<div class="item">
			  <a href="http://www.google.com"> <img src="img/cards/card_joker.jpg"alt="Joker Card"></a>
			</div>

			<div class="item">
			  <a href="http://www.google.com"> <img src="img/cards/card_hulk.jpg" alt="Hulk Card"></a>
			</div>

			<div class="item">
			  <a href="http://www.google.com"> <img src="img/cards/card_cptamerica.jpg" alt="CptAmerica Card"></a>
			</div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
    </div>
    <div class="col-sm-8"> 
      <? 
		// headers to control cache etc
		header("Content-Type: text/html;charset=ISO-8859-1");
		header ("Cache-Control: no-cache");

		// connecting to the database
		mysql_connect('mysql.wiu.edu:2339','root','seh44sop');
		// Selecting the database
		@mysql_select_db('TheConflict') or die("Unable to select database");
		
		//Forming the Query
		$query="SELECT * FROM Card ORDER BY name ASC;";
		$results = mysql_query($query);
		$norows = mysql_numrows($results);
		$i = 0;
		?>
		<table class="table table-hover">
			<thead>
			  <tr>
				<th>Card Name</th>
				<th>Description</th>
				<th>Attack</th>
				<th>Health</th>
				<th>Cost</th>
				<th>Image</th>
			  </tr>
			</thead>
		<?
			while ($norows--)
			{
				?><tr><td><?
				
				echo  mysql_result($results, $i, 'name');  
				?></td><td><?
				echo  mysql_result($results, $i, 'description');
				?></td><td><?
				echo  mysql_result($results, $i, 'attack');
				?></td><td><?
				echo  mysql_result($results, $i, 'health');
				?></td><td><?
				echo  mysql_result($results, $i, 'cost');
				?></td><td>
					<img src="img/cards/
					<? echo mysql_result($results, $i, 'image'); ?>" class="img-rounded" width="100" height="100">
				</td></tr><?
				$i++;
			}
		?><table><?
		//Closing the connection
		mysql_close();
	  ?>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

</body>
</html>
