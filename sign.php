<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['t1'];
$email=$_POST['t2'];
$pw=$_POST['t3'];
$c_pw=$_POST['t4'];
$address=$_POST['t5'];

$sql = "INSERT INTO users (f_name, e_mail, pw, c_pw,address) VALUES ('$name', '$email' , '$pw' , '$c_pw' , '$address')";

if ($conn->query($sql) === TRUE) {
    echo "done";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>