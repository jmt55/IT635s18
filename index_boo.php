<?php //authentication log page

require_once 'session_head.php';
echo "<h3> Log in please </h3>";

$loginfail = $user = $password = $accessType = "";

if (isset($_POST['user']) &&
    isset($_POST['password']) &&
    isset($_POST['accessType']))
{
        $user = washString($_POST['user']);
        $password  = washString($_POST['password']);
        $accessType = washString($_POST['accessType']);

if ($user == "" || $password == "" || $accessType == "")
{
        $loginfail = "incomplete fields <br />";
}
else
{

$db_server = mysqli_connect($dbhostname, $dbuser, $dbpassword);

if (!$db_server) die("unable to connect to MySQL:" . mysqli_error());

mysqli_select_db($db_server, $dbdatabase) or die ("unable to select database: " . mysqli_error());

        $query = "select * from members where user= '$user'";

        $result = mysqli_query($db_server,$query) or die(mysqli_error());

        if (mysqli_num_rows($result))
        {
                $row = mysqli_fetch_row($result);
                $salt1 = "b0k$";
                $salt2 = "h$1n";
                $hashbrown = md5("$salt1$password$salt2");

                if($hashbrown == $row[2] && $accessType == 'admin')
                {
                        $_SESSION['user'] = $user;
                        echo "Welcome Admin $row[1]! Please <a href='admin_home.html'>click here</a>";
                }
                else if($hashbrown == $row[2] && $accessType == 'standard')
                {
                        $_SESSION['user'] = $user;
                        echo "Welcome $row[1]! Please <a href='stduserhome.html'>click here</a>";
                }

                else
                {
                $loginfail = "invalid credentials, please try again!<br />";
                }
        }

}
}
echo <<<_END
<form method='post' action='index_boo.php'> $loginfail
 <pre>
 Username   <input type='text' maxlength='16' name='user' value='$user' /><br />
 Password   <input type='password' maxlength='16' name='password' value='$password'  /><br />
 accessType <input type='accessType' maxlength='16' name='accessType' value='$accessType' /><br />
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <input type='submit' value='Login'>
</pre>
</form>
_END;

