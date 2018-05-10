<?php //refreshorder2.php

/*
By:John Tiu
For: IT635 Spring 2018 Mid/Final Project
Instructor: DJ Kehoe
*/

require_once 'login.inc'; //holds database credentials
require_once 'session_head.php'; //provides web header and session

$user = $_SESSION['user'];

$db_server = mysqli_connect($dbhostname, $dbuser, $dbpassword); //connect to mysql server

if (!$db_server) die("unable to connect to MySQL:" . mysqli_error()); //provide error output if any

mysqli_select_db($db_server, $dbdatabase) or die ("unable to select database: " . mysqli_error()); //selects database and provides error if any

if (isset($_POST['request']) && isset($_POST['sn'])) //use post method to grab 'click' request and array row for 'sn' both are hidden
{
        $sn = $_POST['sn'];
        $query = "update wksinv set status='requested' where sn = '$sn'"; //delete query received from post method

        if (!mysqli_query($db_server, $query)) //provide error for troubleshooting
                {
                echo ("request unsuccessful: $query <br />" . mysqli_error());
                }
                else
                {
                echo "Request Accepted!";
                }
}

if (isset($_POST['deny']) && isset($_POST['sn'])) //use post method to grab 'click' request and array row for 'sn' both are hidden
{
        $sn = $_POST['sn'];
        $query = "delete from wksrequest where sn = '$sn'"; //delete query received from post method

        if (!mysqli_query($db_server, $query)) //provide error for troubleshooting
                {
                echo ("request unsuccessful: $query <br />" . mysqli_error());
                }
                else
                {
                echo "Request from user denied";
                }
}


$query = ("call view_req();"); //php mysql command to query all asset from wksrequest table
$result = mysqli_query($db_server, $query); //holds retrieved data

if (!$result) die ("database access failed: " . mysqli_error());

$rownumber = mysqli_num_rows($result);

for ($i = 0; $i < $rownumber; ++$i)
{
        $row = mysqli_fetch_row($result);
echo <<<_END
        <pre>
        req_no:  $row[0]
        user:    $row[1]
        sn:      $row[2]
   request_time: $row[3]
        </pre>
        <form action="refreshorder2.php" method="post">
        <input type="hidden" name="request" value="yes" />
        <input type="hidden" name="deny" value="yes" />
	<input type="hidden" name="sn" value="$row[2]" />
        <input type="submit" value="Accept" /></form>

        <form action="refreshorder2.php" method="post">
        <input type="hidden" name="deny" value="yes" />
        <input type="hidden" name="sn" value="$row[2]" />
        <input type="submit" value="deny" /></form>

_END;

}

mysqli_close($db_server); //close connection to mysql server


?>


