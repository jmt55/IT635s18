<?php  //header to use
/*
By:John Tiu
For: IT635 Spring 2018 Mid/Final Project
Instructor: DJ Kehoe
*/

include 'func.php';
include 'pic.html';

session_start();

if (isset($_SESSION['user']) &&
    isset($_SESSION['accessType']))
{
        $user = $_SESSION['user'];
        $loggedin = TRUE;
	$accessType = $_SESSION['accessType'];
}


echo "<html><head><title>King Boo Inventory";
if ($loggedin) echo " ($user)";
                           echo "</title></head><body><font face='calibri' size='4'>";
                           echo "<h4>King Boo Inventory </h4>";

if ($loggedin && $accessType == 'standard')
{
             echo "<b> $user</b>:
             <a href='logout.php'>Log out</a> |
             <a href='stduserhome.html'>Home</a>";
}
else if($loggedin && $accessType == 'admin')
{
             echo "<b>$user</b>:
             <a href='logout.php'>Log out</a> |
             <a href='admin_home.html'>home</a>";
}

else $loggedin = FALSE;


?>

