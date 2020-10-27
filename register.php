<?php
if(isset($_POST['submitted']))
{

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$user=$_POST['user'];
$pwd=$_POST['pwd'];
$sex=$_POST['sex'];

$pho=$_POST['pho'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carpooling";
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO login (firstname,lastname,username,password,gender,phone)
VALUES ('$fname', '$lname', '$user','$pwd','$sex','$pho')";

if (mysqli_query($conn, $sql)) {
    echo "SignUp completed successfully";
	header('location:mainpage.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);


}
?>
