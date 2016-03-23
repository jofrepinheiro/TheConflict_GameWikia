

<?php
header ("Cache-Control: no-cache");

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid empty";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect('mysql.wiu.edu:2339','root','seh44sop');
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("TheConflict", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = "select * from User where password LIKE \"$password\" AND username LIKE \"$username\" ;";

//$result = mysql_query($query);

$rows = mysql_num_rows($query);

if ($rows = 1) {
	$_SESSION['login_user']=$username; 
	
	$result=mysql_query("SELECT admin FROM User WHERE username LIKE \"$username\" ;");
	
	
	
	$admin=mysql_result($result, 0, 'admin');
	echo $admin;
	
	if ( $admin == 1){
		header("location:homeadm.php"); // Redirecting admin to admin home page
			$_SESSION['admin']=mysql_result($results, 0, 'admin');
	} else {
		header("location:home.php"); // Redirecting user to home page
	}
	
} else {
	$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>
