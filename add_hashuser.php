By: John Tiu
For: IT635 Spring 2018 Mid/Final Project
Instructor: DJ Kehoe


<?php  //add_hashuser.php -creates user with hashed and salted password.


$salt1 = "b0k$";
$salt2 = "h$1n";

$user = 'boo-admin'; $password = 'mario64';
$accessType = 'admin';
$location = 'Nintendo';
$hashbrown = md5("$salt1$password$salt2");
newUser($user, $hashbrown, $accessType, $location);

function newUser($user, $password, $accessType, $location)
{	
	$dbhostname = 'localhost';
	$dbuser = 'root';
	$dbpassword = 'Ryder9uit';
	$dbdatabase = 'ComputerInventory';

	$db_server = mysqli_connect($dbhostname, $dbuser, $dbpassword);
	if (!$db_server) die("unable to connect to MySQL:" . mysqli_error());
	
        mysqli_select_db($db_server, $dbdatabase) or die ("unable to select database: " . mysqli_error());
	
	$query = "INSERT INTO members (user,password,accessType,location) VALUES ('$user','$password','$accessType','$location')";
	$result = mysqli_query($db_server, $query);
	if (!$result) die ("Database access insert failed: " . mysqli_error($db_server));
}

?>



