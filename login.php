<?php
$con=new mysqli("localhost", "root", "", "carpooling");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else
	echo "Connected Successfully";
$username = $_POST["user"];
echo $username;
$password = $_POST["pass"];
echo $password;
$result = $con->query("select username, password from login where username='" . $username . "' and password='" . $password . "'");

if ($result->num_rows ==1)
{
header("Location:home.html");
}
else
{
echo "login failed";
header("location:login.html");
}
?>