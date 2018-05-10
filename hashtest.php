<?php //testhashlogin

/*
By:John Tiu
For: IT635 Spring 2018 Mid/Final Project
Instructor: DJ Kehoe
*/


require_once 'login.inc';

$user = "adminuser";
$password = "hashteis";
$accessType = "admin";

$db_server = mysqli_connect($dbhostname, $dbuser, $dbpassword);

if (!$db_server) die("unable to connect to MySQL:" . mysqli_error());

mysqli_select_db($db_server, $dbdatabase) or die ("unable to select database: " . mysqli_error());

echo "success connect to db <br />";

$query = "select * from members where user= '$user'";

$result = mysqli_query($db_server,$query);

if (!$result) die ("database access failed: " . mysqli_error()); 

if (mysqli_num_rows($result))
        {
                $row = mysqli_fetch_row($result);
                $salt1 = 'b0k$';
                $salt2 = 'h$1n';
                $hashbrown = md5("$salt1$password$salt2");

                if($hashbrown == $row[2])
                {
                        echo "Welcome $row[1]";
                }
		else if (mysqli_fetch_row($result) == 0)
		{
			echo "invalid credentials, please try again!";
		}
        } 


mysqli_close($db_server);


?>
