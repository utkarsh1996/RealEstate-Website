<?php
$servername = "localhost";
$username = "root";
$password = "utkarsh1996";
$dbname = "dbms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);}

$email=$_POST['p1'];

$pass=$_POST['p2'];


$sql = "SELECT e_mail, pw FROM project WHERE e_mail='$email' AND pw = '$pass' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) 
     {
		session_start();
		$_SESSION['en']=$enroll;
		header("location:afterlogin.php");
	}
	else
	{
    echo "invalid login";
	}


mysqli_close($conn);
?>