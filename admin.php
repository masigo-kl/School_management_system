<?php 
$uname = "admin";
$pwd ="admin";

session_start();
if(isset($_SESSION['uname']))
{
	echo "<h1>Welcome>".$_SESSION['uname']."</h1>";

	echo "<br><a href=logout.php><input type = button name = logout value = logout></a>";
}
else
{
	if($POST['uname'] == $uname && $POST['pwd'] ==$pwd)
	{
		$_SESSION['uname'] = $uname;
		echo "";
	}
}

?>

<?php

include_once 'dbConnection.php';


$ref      = @$_GET['q'];
$username = $_POST['uname'];
$password = $_POST['password'];

$username = stripslashes($username);
$username = addslashes($username);
$password = stripslashes($password);
$password = addslashes($password);



$result = mysqli_query($con, "SELECT username FROM admin WHERE username = '$username' and password = '$password'") or die('Error');
$count = mysqli_num_rows($result);

if ($count == 1) {
    session_start();
    if (isset($_SESSION['username'])) {
        session_unset();
    }
    $_SESSION["name"]     = 'Admin';
    $_SESSION["key"]      = '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39';
    $_SESSION["username"] = $username;
    header("location:dash.php?q=0");
	
} else
    header("location:$ref?w=Warning : Access denied Please enter the correct?");


?>
