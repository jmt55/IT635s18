<?php //logout.php - tears down session and bring user back to login page

/*
By:John Tiu
For: IT635 Spring 2018 Mid/Final Project
Instructor: DJ Kehoe
*/

require_once 'session_head.php'; //provides the head, session, and function "logOFF"

if (isset($_SESSION['user']))
{
	logOFF();
		echo "Log out successful! <a href='home_page.php'> Click me</a> to log in again.";
	
}
else echo "Logged Out";

?>



