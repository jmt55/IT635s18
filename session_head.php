<?php  //header to use
/*
By: John Tiu
For: IT635 Spring 2018 Mid/Final Project
Instructor: DJ Kehoe
*/


include 'func.php';
include 'pic.html';
  
session_start();

if (isset($_SESSION['user']))
{
	$user = $_SESSION['user'];
	$loggedin = TRUE;
}

else $loggedin = FALSE;

echo "<html><head><title>King Boo Inventory";
if ($loggedin) echo " ($user)";
			   echo "</title></head><body><font face='calibri' size='4'>";	
			   echo "<h4>King Boo Inventory </h4>";
			   
if ($loggedin && $user != "admin" ) 
{
	     echo "<b> $user</b>:
	     <a href='logout.php'>Log out</a> |
	     <a href='stduserhome.html'>Home</a>";
}	
else if ($loggedin && $user == "admin")
{	     
	     echo "<b>$user</b>:
	     <a href='logout.php'>Log out</a> |
	     <a href='admin_home.html'>home</a>";
}


?>	      
	
