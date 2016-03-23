<?php 

	include('session.php');
	
	
	mysql_connect('mysql.wiu.edu:2339','root','seh44sop');
		// Selecting the database
	@mysql_select_db('TheConflict') or die("Unable to select database");
	
	$name=$_POST['name'];
	$description=$_POST['description'];
	$attack=$_POST['attack'];
	$health=$_POST['health'];
	$cost=$_POST['cost'];
	$imageName=$cardName;
	
	$query="INSERT INTO CARD(name,description,attack,health,cost,image) VALUES(\"$name\", \"$description\", \"$attack\", \"$health\", \"$cost\", \"$imageName\");";
	$result=mysql_query($query);
	
	$location = 'img/cards/';
	$cardName = $_POST['name'].".jpg";
	$tmp_name = $_FILES['picture']['tmp_name'];
	
	
	if(move_uploaded_file($tmp_name, $location.$cardName)) {
		echo "The file ".$cardName." was uploaded!";
	} else{
		echo "There was an error uploading the file, please try again!";
	}
	
	if($result){
		echo "<h3> <b> $name </b> was successfuly added to the database. Redirecting...</h3>";
		header( "refresh:5;url=home.php" );
		
	}else{
	   echo("<br>Data Input Failed");
	}	
?>