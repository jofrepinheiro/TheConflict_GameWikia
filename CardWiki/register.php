<html>
	<head>
	  <title>The Conflict</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
		// headers to control cache etc
		header("Content-Type: text/html;charset=ISO-8859-1");
		header ("Cache-Control: no-cache");

		// connecting to the database
		mysql_connect('mysql.wiu.edu:2339','root','seh44sop');
		// Selecting the database
		@mysql_select_db('TheConflict') or die("Unable to select database");


		$username = $_POST['username'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		//Forming the Query
		$query1="SELECT * FROM User WHERE username LIKE \"$username\"; ";
		$result1 = mysql_query($query1);
		$rows1=mysql_num_rows($result1);
		
		if($rows1 != 0){ ?>
			<nav class="navbar navbar-inverse navbar-fixed-top">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href=-"#">The Conflict</a>
				</div>
				<div>
				  <ul class="nav navbar-nav">
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="register.html">Register</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="help.html">Help</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
			  
			<div class="container">
				  <div class="jumbotron">
					<center><h1><b>New User - Register</b></h1></center>
				  </div>

				<div class="col-sm-12">
					<form id="register" method="POST" class="form-signin" action="register.php">
						<div class="form-group">
							<label for="username">User:*</label>
							<input type="text" id="username" name="username" class="form-control" placeholder="Type an username of your choice." required autofocus><font color=red>Username '<?echo $username?>' already exists.</font>
						</div>
						
						<div class="form-group">
							<label for="name" >Full Name:</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Type your full name.">
						</div>
						
						<div class="form-group">
							<label for="email">Email:*</label>
							<input type="text" id="email" name="email" class="form-control" placeholder="Email. e.g. john@doe.com" required autofocus>
						</div>
						
						<div class="form-group">
							<label for="password">Password:*</label>
							<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>*required
						</div>
						<input class="btn btn-lg btn-primary btn-block" value="Register" type="submit"/>
					</form>
				</div>
			</div><?	
		}else{
			
			$query2="SELECT * FROM User WHERE email LIKE \"$email\"; ";
			$result2 = mysql_query($query2);
			$rows2=mysql_num_rows($result2);
			
			if($rows2 != 0){ ?>
				<nav class="navbar navbar-inverse navbar-fixed-top">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href=-"#">The Conflict</a>
					</div>
					<div>
					  <ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="register.html">Register</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="help.html">Help</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					  </ul>
					</div>
				  </div>
				</nav>
				  
				<div class="container">
					  <div class="jumbotron">
						<center><h1><b>New User - Register</b></h1></center>
					  </div>

					<div class="col-sm-12">
						<form id="register" method="POST" class="form-signin" action="register.php">
							<div class="form-group">
								<label for="username">User:*</label>
								<input type="text" id="username" name="username" class="form-control" placeholder="Type an username of your choice." required autofocus>
							</div>
							
							<div class="form-group">
								<label for="name" >Full Name:</label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Type your full name.">
							</div>
							
							<div class="form-group">
								<label for="email">Email:*</label>
								<input type="text" id="email" name="email" class="form-control" placeholder="Email. e.g. john@doe.com" required autofocus><font color=red>This email '<?echo $email?>' already exists.</font>
							</div>
							
							<div class="form-group">
								<label for="password">Password:*</label>
								<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>*required
							</div>
							<input class="btn btn-lg btn-primary btn-block" value="Register" type="submit"/>
						</form>
					</div>
				</div>		
			
			<?}else{
				
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				?>
					<nav class="navbar navbar-inverse navbar-fixed-top">
					  <div class="container-fluid">
						<div class="navbar-header">
						  <a class="navbar-brand" href=-"#">The Conflict</a>
						</div>
						<div>
						  <ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li class="active"><a href="register.html">Register</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="help.html">Help</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						  </ul>
						</div>
					  </div>
					</nav>
					  
					<div class="container">
						  <div class="jumbotron">
							<center><h1><b>New User - Register</b></h1></center>
						  </div>

						<div class="col-sm-12">
							<form id="register" method="POST" class="form-signin" action="register.php">
								<div class="form-group">
									<label for="username">User:*</label>
									<input type="text" id="username" name="username" class="form-control" placeholder="Type an username of your choice." required autofocus>
								</div>
								
								<div class="form-group">
									<label for="name" >Full Name:</label>
									<input type="text" id="name" name="name" class="form-control" placeholder="Type your full name.">
								</div>
								
								<div class="form-group">
									<label for="email">Email:*</label>
									<input type="text" id="email" name="email" class="form-control" placeholder="Email. e.g. john@doe.com" required autofocus><font color=red>This email is invalid.</font>
								</div>
								
								<div class="form-group">
									<label for="password">Password:*</label>
									<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>*required
								</div>
								<input class="btn btn-lg btn-primary btn-block" value="Register" type="submit"/>
							</form>
						</div>
					</div>		
				<?						
				}else{
					$query2="INSERT INTO User(username, password, email, admin, name) VALUES(\"$username\", \"$password\", \"$email\", false, \"$name\");";
					
					$result = mysql_query($query2);
					
					if($result)
					{
						echo "<h3> <b> $name </b> was successfuly registered. Redirecting...</h3>";
						header( "refresh:5;url=index.html" );
						
					} 
					else
					{
					   echo("<br>Data Input Failed");
					}
				}
			}
			
			
		}
		//Closing the connection
		mysql_close();
		?>
	</body>
</html>