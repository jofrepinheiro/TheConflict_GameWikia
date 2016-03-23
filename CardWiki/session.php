<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect('mysql.wiu.edu:2339','root','seh44sop');
// Selecting Database
$db = mysql_select_db("TheConflict", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from User where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
$ses_sql=mysql_query("select admin from User where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$admin_session =$row['admin'];
if(!isset($login_session) && !isset($admin_session)){
mysql_close($connection); // Closing Connection
header('location:home.php'); // Redirecting To Home Page
}
?>