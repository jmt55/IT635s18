<?php //authentication log page

require_once 'session_head.php'; //includes session, function, and web header
echo "<h3> Log in please </h3>";

$loginfail = $user = $password = $accessType = ""; //loginfail variable when value is blank

// isset check if post func variables is set or null
if (isset($_POST['user']) &&
    isset($_POST['password']) &&
    isset($_POST['accessType']))
{
        $user = washString($_POST['user']); //clean user input, remove special characters for security
        $password  = washString($_POST['password']);
        $accessType = washString($_POST['accessType']);

if ($user == "" || $password == "" || $accessType == "") //if any value is blank display error
{
        $loginfail = "incomplete fields <br />";
}
else
{

$db_server = mysqli_connect($dbhostname, $dbuser, $dbpassword); //makes connections to sql server

if (!$db_server) die("unable to connect to MySQL:" . mysqli_error()); //parse error if any

mysqli_select_db($db_server, $dbdatabase) or die ("unable to select database: " . mysqli_error()); //select database

        $query = "select * from members where user= '$user'"; //query database for all users

        $result = mysqli_query($db_server,$query) or die(mysqli_error()); //holds temp data retrieved into $result variable

        if (mysqli_num_rows($result)) //strings below will parse each row array in members table compare user and hashed password
        {
                $row = mysqli_fetch_row($result);
                $salt1 = "b0k$";
                $salt2 = "h$1n";
                $hashbrown = md5("$salt1$password$salt2");

                if($hashbrown == $row[2] && $accessType == 'admin')//if hash password matched $user var and $accessType var equal admin login success and dsiplay proper link
                {
                        $_SESSION['user'] = $user;
                        echo "Welcome Admin $row[1]! Please <a href='admin_home.html'>click here</a>";
                }
                else if($hashbrown == $row[2] && $accessType == 'standard')// if has password matched and accessType equal standard, display proper link to standard access page
                {
                        $_SESSION['user'] = $user;
                        echo "Welcome $row[1]! Please <a href='stduserhome.html'>click here</a>";
                }

                else
                {
                $loginfail = "invalid credentials, please try again!<br />";//all else display error message
                }
        }

}
}

//below is the web form
echo <<<_END
<form method='post' action='home_page.php'> $loginfail
 <pre>
 Username   <input type='text' maxlength='16' name='user' value='$user' /><br />
 Password   <input type='password' maxlength='16' name='password' value='$password'  /><br />
 accessType <input type='accessType' maxlength='16' name='accessType' value='$accessType' /><br />
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <input type='submit' value='Login'>
</pre>
</form>
_END;


?>

